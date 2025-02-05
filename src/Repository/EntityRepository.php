<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Repository;

use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Support\Facades\Log;
use Thecodebunny\ShopwareApi\Client\AdminAuthenticator;
use Thecodebunny\ShopwareApi\Client\CreateClientTrait;
use Thecodebunny\ShopwareApi\Client\GrantType\ClientCredentialsGrantType;

use Thecodebunny\ShopwareApi\Data\BrilliantContext;
use Thecodebunny\ShopwareApi\Data\Context;
use Thecodebunny\ShopwareApi\Data\DewaltContext;
use Thecodebunny\ShopwareApi\Data\HerthContext;
use Thecodebunny\ShopwareApi\Data\KueblerContext;
use Thecodebunny\ShopwareApi\Data\MediaImportContext;
use Thecodebunny\ShopwareApi\Data\MediaUploadContext;
use Thecodebunny\ShopwareApi\Data\ProductUploadContext;
use Thecodebunny\ShopwareApi\Data\CustomerImportContext;
use Thecodebunny\ShopwareApi\Data\MediaUploadFilesContext;
use Thecodebunny\ShopwareApi\Data\MilwaukeeContext;
use Thecodebunny\ShopwareApi\Data\PriceUpdateContext;
use Thecodebunny\ShopwareApi\Data\StockUpdateContext;
use Thecodebunny\ShopwareApi\Data\UvexContext;
use Thecodebunny\ShopwareApi\Data\Criteria;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;
use Thecodebunny\ShopwareApi\Data\Entity\EntityDefinition;
use Thecodebunny\ShopwareApi\Data\Uuid\Uuid;
use Thecodebunny\ShopwareApi\Exception\ShopwareResponseException;
use Thecodebunny\ShopwareApi\Exception\ShopwareSearchResponseException;
use Thecodebunny\ShopwareApi\Factory\HydratorFactory;
use Thecodebunny\ShopwareApi\Hydrate\HydratorInterface;
use Thecodebunny\ShopwareApi\Repository\Struct\AggregationResultCollection;
use Thecodebunny\ShopwareApi\Repository\Struct\CloneBehaviour;
use Thecodebunny\ShopwareApi\Repository\Struct\EntitySearchResult;
use Thecodebunny\ShopwareApi\Repository\Struct\IdSearchResult;
use Thecodebunny\ShopwareApi\Repository\Struct\SearchResultMeta;
use Thecodebunny\ShopwareApi\Repository\Struct\VersionResponse;
use Thecodebunny\ShopwareApi\Service\ApiResponse;
use Thecodebunny\ShopwareApi\Service\Struct\SyncOperator;
use Thecodebunny\ShopwareApi\Service\Struct\SyncPayload;
use Thecodebunny\ShopwareApi\Service\SyncService;

class EntityRepository implements RepositoryInterface
{
    use CreateClientTrait;

    private const SEARCH_API_ENDPOINT = '/api/search';

    private const MERGE_VERSION_API_ENDPOINT = '/api/_action/version/merge';

    private const VERSION_API_ENDPOINT = '/api/_action/version';

    private const BULK_API_ENDPOINT = '/_action/sync';

	private const PICKWARE_API_ENDPOINT = '/_action/pickware-erp/stock/move';

	private const ORDER_DELIVERY_ENDPOINT = '/api/_action/order_delivery/state';

    private const SEARCH_IDS_API_ENDPOINT = '/api/search-ids';

    public string $entityName;

    public string $route;

    private HydratorInterface $hydrator;

    private EntityDefinition $definition;

    public function __construct(string $entityName, EntityDefinition $definition, string $route, ?HydratorInterface
    $hydrator = null)
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

    public function get(string $id, Criteria $criteria, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context): ?Entity
    {
        $criteria->setIds([$id]);

        return $this->search($criteria, $context)->get($id);
    }

    public function search(Criteria $criteria, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context): EntitySearchResult
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

    public function searchPickware(Criteria $criteria, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context, string $pickwareEndpoint): EntitySearchResult
    {
        try {
            $response = $this->httpClient->post($this->getSearchPickwareApiUrl($context->apiEndpoint, $pickwareEndpoint), [
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

    public function searchIds(Criteria $criteria, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context): IdSearchResult
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
    public function create(array $data, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context)
    {
        try {
            return json_decode(
					$this->httpClient->post($this->getEntityEndpoint($context->apiEndpoint), [
					'headers' => $this->buildHeaders($context),
					'body' => json_encode($data)
				])->getBody()->getContents()
			);
        } catch (BadResponseException $exception) {
            return ($exception->getResponse()->getBody()->getContents());
        }
    }

    /**
     * Update an entity
     */
    public function update(array $data, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context)
    {
        //dump($data);
        if (empty($data['id'])) {
            return new \InvalidArgumentException('Id is not provided for update payload');
        }

        $id = $data['id'];

        try {
            return $this->httpClient->patch($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data)
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            return $exception->getResponse()->getBody()->getContents();
        }
    }

	public function updateOrderState(array $data, $transition, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context)
	{
		if (empty($data['id'])) {
			return new \InvalidArgumentException('Id is not provided for update payload');
		}

		$id = $data['id'];
		try {
			return $this->httpClient->post($this->getEntityOrderStateEndpoint($context->apiEndpoint, $id,
				$transition), [
				'headers' => $this->buildHeaders($context),
				'body' => json_encode($data)
			])->getBody()->getContents();
		} catch (BadResponseException $exception) {
			return $exception->getResponse()->getBody()->getContents();
		}
	}

	public function updateOrderDeliveryState(array $data, $transition, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context)
	{
		if (empty($data['id'])) {
			return new \InvalidArgumentException('Id is not provided for update payload');
		}

		$id = $data['id'];
		echo '/n ' . $context->apiEndpoint;
		try {
			$response =  $this->httpClient->post($this->getEntityOrderDeliveryStateEndpoint($context->apiEndpoint, $id,
				$transition), [
				'headers' => $this->buildHeaders($context),
				'body' => json_encode($data)
			])->getBody()->getContents();
			return $response;
		} catch (BadResponseException $exception) {
			return $exception->getResponse()->getBody()->getContents();
		}
	}

    public function updateBulk(array $data, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context)
    {
        try {
            return $this->httpClient->post($this->getBulkApiEndpoint($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data)
            ])->getBody();
        } catch (BadResponseException $exception) {
            return $exception->getResponse()->getBody()->getContents();
        }
    }

	public function movePickwareStock(array $data, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context)
	{
		Log::channel('stock')->info('CONTEXT API ENDPOINT - ' . $context->apiEndpoint);
		try {
			$response =  $this->httpClient->post($this->getPickwareApiEndpoint($context->apiEndpoint), [
				'headers' => $this->buildHeaders($context),
				'body' => json_encode($data)
			]);
//			Log::channel('stock')->info('$response - ' . print_r($response, true));
			return $response;
		} catch (BadResponseException $exception) {
//			Log::channel('$exception')->info('$response - ' . print_r($exception, true));
			return $exception->getResponse()->getBody()->getContents();
		}
	}

    public function delete(string $id, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context)
    {
        try {
            $this->httpClient->delete($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
            ])->getBody()->getContents();
        } catch (BadResponseException $exception) {
            return $exception->getResponse()->getBody();
        }
    }

    public function syncDeleted(array $ids, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context): ApiResponse
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

    public function createVersion(string $id, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context, ?string $versionId = null, ?string $versionName = null): VersionResponse
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

    public function mergeVersion(string $versionId, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context): void
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

    public function deleteVersion(string $id, string $versionId, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context): void
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

    public function clone(string $id, Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context, ?CloneBehaviour $cloneBehaviour = null): string
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

    protected function getEntityEndpoint(string $endpoint, ?string $entityId = null):
    string
    {
        return sprintf('%s/api%s/%s?_response=detail', $endpoint, $this->route, $entityId ?? '');
    }


	protected function getEntityOrderStateEndpoint(string $endpoint, ?string $entityId = null, ?string $transition =
	null):
	string
	{
		return sprintf('%s/api/_action%s/%s/state/%s?_response=detail', $endpoint, $this->route, $entityId ?? '', $transition ?? '');
	}

	protected function getEntityOrderDeliveryStateEndpoint(string $endpoint, ?string $entityId = null, ?string
	$transition = null):
	string
	{
		return sprintf('%s/api/_action%s/%s/state/%s?_response=detail', $endpoint, '/order_delivery', $entityId ?? '',
			$transition ?? '');
	}

    protected function getBulkApiEndpoint(string $endpoint, ?string $path = null):
    string
    {
        return sprintf('%s/api%s?response=detail', $endpoint, self::BULK_API_ENDPOINT, $path);
    }

	protected function getPickwareApiEndpoint(string $endpoint, ?string $path = null):
	string
	{
		return sprintf('%s/api%s?response=detail', $endpoint, self::PICKWARE_API_ENDPOINT, $path);
	}

    protected function getSearchApiUrl(string $endpoint, ?string $path = null): string
    {
        return sprintf('%s%s%s%s', $endpoint, self::SEARCH_API_ENDPOINT, $this->route, $path ?? '');
    }

    protected function getSearchPickwareApiUrl(string $endpoint, string $pickwareEndpoint): string
    {
        return sprintf('%s%s%s',  $endpoint, self::SEARCH_API_ENDPOINT, $pickwareEndpoint);
    }

    protected function getCloneEndpoint(string $endpoint, string $entityId): string
    {
        return sprintf('%s/api/_action/clone%s/%s?response=detail', $endpoint, $this->route, $entityId);
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

    protected function buildHeaders(Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context, array $additionalHeaders = []): array
    {
        $accessToken = $context->accessToken;

        $headers = array_merge([
            'Accept' => 'application/vnd.api+json',
            'Content-Type' => 'application/json',
            'Content-Type' => 'application/json',
            '_response' => 'detail',
            'Authorization' => 'Bearer ' . $accessToken,
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
