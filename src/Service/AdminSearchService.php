<?php declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Service;

use GuzzleHttp\Exception\BadResponseException;
use TheCodeBunny\ShopwareApi\Data\Context;
use TheCodeBunny\ShopwareApi\Data\Criteria;
use TheCodeBunny\ShopwareApi\Exception\ShopwareResponseException;
use TheCodeBunny\ShopwareApi\Factory\HydratorFactory;
use TheCodeBunny\ShopwareApi\Hydrate\HydratorInterface;
use TheCodeBunny\ShopwareApi\Repository\Struct\AggregationResultCollection;
use TheCodeBunny\ShopwareApi\Repository\Struct\EntitySearchResult;
use TheCodeBunny\ShopwareApi\Repository\Struct\SearchResultMeta;
use TheCodeBunny\ShopwareApi\Service\Struct\KeyValuePair;
use TheCodeBunny\ShopwareApi\Service\Struct\KeyValuePairs;

class AdminSearchService extends ApiService
{
    private const ADMIN_SEARCH_ENDPOINT = '/api/_admin/search';

    private HydratorInterface $hydrator;

    public function __construct(
        ?Context $context = null,
        string $contentType = 'application/vnd.api+json',
        ?HydratorInterface $hydrator = null
    ) {
        $this->hydrator = $hydrator ?: HydratorFactory::create();

        parent::__construct($context, $contentType);
    }

    /**
     * @param  KeyValuePairs $criteriaCollection
     * @param  array  $additionalHeaders
     * @throws ShopwareResponseException
     * @return KeyValuePairs
     */
    public function search(KeyValuePairs $criteriaCollection, array $additionalHeaders = []): KeyValuePairs
    {
        $parsed = [];

        foreach ($criteriaCollection as $part) {
            $partCriteria = $part->getValue();

            if (!$partCriteria instanceof Criteria) {
                throw new \InvalidArgumentException('Parameter $criteria must be array of Criteria');
            }

            $parsed[$part->getKey()] = $partCriteria->parse();
        }

        /** @var Context|null $context */
        $context = $this->context;

        if ($context === null) {
            throw new \Exception('Please call setContext method before sending the request');
        }

        try {
            $response = $this->httpClient->post($this->getFullUrl(self::ADMIN_SEARCH_ENDPOINT), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
                'json' => $parsed,
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            $pairs = new KeyValuePairs();

            $data = $contents['data'] ?? [];

            foreach ($criteriaCollection as $entityName => $partCriteria) {
                $itemResponse = $data[$entityName] ?? [];

                $rawData = $itemResponse['data'] ?? [];

                $rawData = array_map(function ($item) use ($entityName, $itemResponse) {
                    return [
                        'type' => $entityName,
                        'id' => $item['id'],
                        'attributes' => $item,
                        'meta' => [
                            'total' => $itemResponse['total'],
                            'totalCountMode' => Criteria::TOTAL_COUNT_MODE_EXACT
                        ],
                    ];
                }, $rawData);

                $itemResponse['data'] = $rawData;

                $aggregations = new AggregationResultCollection($itemResponse['aggregations'] ?? []);

                $entities = $this->hydrator->hydrateSearchResult($itemResponse, $context, $entityName);

                $meta = new SearchResultMeta($itemResponse['total'] ?? 0, Criteria::TOTAL_COUNT_MODE_EXACT);

                $result = new EntitySearchResult($entityName, $meta, $entities, $aggregations, $partCriteria->getValue(), $context);

                $pairs->add(KeyValuePair::create($entityName, $result));
            }

            return $pairs;
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
