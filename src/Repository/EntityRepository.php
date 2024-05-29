<?php declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Repository;

use GuzzleHttp\Exception\BadResponseException;
use TheCodeBunny\ShopwareApi\Client\CreateClientTrait;
use TheCodeBunny\ShopwareApi\Data\Context;
use TheCodeBunny\ShopwareApi\Data\Criteria;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;
use TheCodeBunny\ShopwareApi\Data\Entity\EntityDefinition;
use TheCodeBunny\ShopwareApi\Data\Uuid\Uuid;
use TheCodeBunny\ShopwareApi\Exception\ShopwareResponseException;
use TheCodeBunny\ShopwareApi\Exception\ShopwareSearchResponseException;
use TheCodeBunny\ShopwareApi\Factory\HydratorFactory;
use TheCodeBunny\ShopwareApi\Hydrate\HydratorInterface;
use TheCodeBunny\ShopwareApi\Repository\Struct\AggregationResultCollection;
use TheCodeBunny\ShopwareApi\Repository\Struct\CloneBehaviour;
use TheCodeBunny\ShopwareApi\Repository\Struct\EntitySearchResult;
use TheCodeBunny\ShopwareApi\Repository\Struct\IdSearchResult;
use TheCodeBunny\ShopwareApi\Repository\Struct\SearchResultMeta;
use TheCodeBunny\ShopwareApi\Repository\Struct\VersionResponse;
use TheCodeBunny\ShopwareApi\Service\ApiResponse;
use TheCodeBunny\ShopwareApi\Service\Struct\SyncOperator;
use TheCodeBunny\ShopwareApi\Service\Struct\SyncPayload;
use TheCodeBunny\ShopwareApi\Service\SyncService;

class EntityRepository implements RepositoryInterface
{
    use CreateClientTrait;

    private const SEARCH_API_ENDPOINT = '/api/search';

    private const MERGE_VERSION_API_ENDPOINT = '/api/_action/version/merge';

    private const VERSION_API_ENDPOINT = '/api/_action/version';

    private const SEARCH_IDS_API_ENDPOINT = '/api/search-ids';

    public string $entityName;

    public string $route;

    private HydratorInterface $hydrator;

    private EntityDefinition $definition;

    public function __construct(string $entityName, EntityDefinition $definition, string $route, ?HydratorInterface $hydrator = null)
    {
        $this->entityName = $entityName;
        $this->httpClient = $this->httpClient ?? $this->createHttpClient();
        $this->hydrator = $hydrator ?: HydratorFactory::create();
        $this->definition = $definition;
        $this->route = $route;
    }

    public function getDefinition(): EntityDefinition
    {
        return $this->definition;
    }

    public function get(string $id, Criteria $criteria, Context $context): ?Entity
    {
        $criteria->setIds([$id]);

        return $this->search($criteria, $context)->get($id);
    }

    public function search(Criteria $criteria, Context $context): EntitySearchResult
    {
        try {
            $response = $this->httpClient->post($this->getSearchApiUrl($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($criteria->parse())
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();

            throw new ShopwareSearchResponseException($message, $exception->getResponse()->getStatusCode(), $criteria, $exception);
        }

        $response = $this->decodeResponse($response);

        $aggregations = new AggregationResultCollection($response['aggregations']);

        $entities = $this->hydrator->hydrateSearchResult($response, $context, $this->entityName);

        $meta = new SearchResultMeta($response['meta']['total'], $response['meta']['totalCountMode']);

        return new EntitySearchResult($this->entityName, $meta, $entities, $aggregations, $criteria, $context);
    }

    public function searchIds(Criteria $criteria, Context $context): IdSearchResult
    {
        try {
            $response = $this->httpClient->post($this->getSearchIdsApiUrl($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($criteria->parse())
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();

            throw new ShopwareSearchResponseException($message, $exception->getResponse()->getStatusCode(), $criteria, $exception);
        }

        $response = $this->decodeResponse($response);

        return new IdSearchResult($response['total'], $response['data'], $criteria, $context);
    }

    /**
     * Create an entity
     */
    public function create(array $data, Context $context): void
    {
        try {
            $this->httpClient->post($this->getEntityEndpoint($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data)
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    /**
     * Update an entity
     */
    public function update(array $data, Context $context): void
    {
        if (empty($data['id'])) {
            throw new \InvalidArgumentException('Id is not provided for update payload');
        }

        $id = $data['id'];

        try {
            $this->httpClient->patch($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data)
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function delete(string $id, Context $context): void
    {
        try {
            $this->httpClient->delete($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function syncDeleted(array $ids, Context $context): ApiResponse
    {
        $syncService = new SyncService($context);

        $headers = ['fail-on-error' => true];

        if (!\is_array($ids[array_key_first($ids)]))
        {
            $data = array_map(function (string $id) {
                return ['id' => $id];
            }, $ids);
        } else
        {
            $data = $ids;
        }

        $payload = new SyncPayload();
        $operator = new SyncOperator($this->entityName, SyncOperator::DELETE_OPERATOR, $data);
        $payload->set($this->entityName, $operator);

        return $syncService->sync($payload, [], $headers);
    }

    public function createVersion(string $id, Context $context, ?string $versionId = null, ?string $versionName = null): VersionResponse
    {
        $data = [];

        if ($versionId) {
            $data['versionId'] = $versionId;
        }

        if ($versionName) {
            $data['versionName'] = $versionName;
        }

        try {
            $response = $this->httpClient->post($this->getCreateVersionEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data)
            ])->getBody()->getContents();

            $response = $this->decodeResponse($response);

            return new VersionResponse($response);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function mergeVersion(string $versionId, Context $context): void
    {
        try {
            $this->httpClient->post($this->getMergeVersionEndpoint($context->apiEndpoint, $versionId), [
                'headers' => $this->buildHeaders($context, [
                    'sw-version-id' => $versionId
                ]),
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function deleteVersion(string $id, string $versionId, Context $context): void
    {
        try {
            $this->httpClient->post($this->getDeleteVersionEndpoint($context->apiEndpoint, $id, $versionId), [
                'headers' => $this->buildHeaders($context),
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function clone(string $id, Context $context, ?CloneBehaviour $cloneBehaviour = null): string
    {
        $data = [];

        if ($cloneBehaviour) {
            $data = $cloneBehaviour->jsonSerialize();
        }

        try {
            $response = $this->httpClient->post($this->getCloneEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data)
            ])->getBody()->getContents();

            $response = $this->decodeResponse($response);

            return $response['id'];
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function createNew(array $data): Entity
    {
        $entityClass = $this->getDefinition()->getEntityClass();

        /** @var Entity $entity */
        $entity = new $entityClass($data);

        $entity->id = Uuid::randomHex();
        $entity->_uniqueIdentifier = $entity->id;
        $entity->internalSetEntityName($this->getDefinition()->getEntityName());

        return $entity;
    }

    protected function getEntityEndpoint(string $endpoint, ?string $entityId = null): string
    {
        return sprintf('%s/api%s/%s', $endpoint, $this->route, $entityId ?? '');
    }

    protected function getSearchApiUrl(string $endpoint, ?string $path = null): string
    {
        return sprintf('%s%s%s%s', $endpoint, self::SEARCH_API_ENDPOINT, $this->route, $path ?? '');
    }

    protected function getCloneEndpoint(string $endpoint, string $entityId): string
    {
        return sprintf('%s/api/_action/clone%s/%s', $endpoint, $this->route, $entityId);
    }

    protected function getMergeVersionEndpoint(string $endpoint, string $versionId): string
    {
        return sprintf('%s%s%s/%s', $endpoint, self::MERGE_VERSION_API_ENDPOINT, $this->route, $versionId);
    }

    protected function getCreateVersionEndpoint(string $endpoint, string $entityId): string
    {
        return sprintf('%s%s%s/%s', $endpoint, self::VERSION_API_ENDPOINT, $this->route, $entityId);
    }

    protected function getDeleteVersionEndpoint(string $endpoint, string $entityId, string $versionId): string
    {
        return sprintf('%s%s%s%s/%s', $endpoint, self::VERSION_API_ENDPOINT, $versionId, $this->route, $entityId);
    }

    protected function getSearchIdsApiUrl(string $endpoint, ?string $path = null): string
    {
        return sprintf('%s%s%s%s', $endpoint, self::SEARCH_IDS_API_ENDPOINT, $this->route, $path ?? '');
    }

    protected function buildHeaders(Context $context, array $additionalHeaders = []): array
    {
        $accessToken = $context->accessToken;

        $headers = array_merge([
            'Accept' => 'application/vnd.api+json',
            'Content-Type' => 'application/json',
            'Authorization' => $accessToken->tokenType . ' ' . $accessToken->accessToken,
            'sw-language-id' => $context->languageId,
            'sw-currency-id' => $context->currencyId,
            'sw-version-id' => $context->versionId,
            'sw-inheritance' => $context->inheritance,
            'sw-api-compatibility' => $context->compatibility,
        ], $additionalHeaders, $context->additionalHeaders);

        return array_filter($headers);
    }

    private function decodeResponse(string $response): array
    {
        return \json_decode($response, true) ?? [];
    }
}
