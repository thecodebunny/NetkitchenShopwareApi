<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Service;

use Illuminate\Support\Facades\Log;
use Thecodebunny\ShopwareApi\Client\CreateClientTrait;
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

class ApiService
{
    use CreateClientTrait;

    public Context|MediaImportContext|MediaUploadContext|ProductUploadContext|MediaUploadFilesContext|CustomerImportContext|StockUpdateContext|PriceUpdateContext|KueblerContext|DewaltContext|BrilliantContext|HerthContext|MilwaukeeContext|UvexContext $context;

    protected string $contentType;

    /**
     * @deprecated tag v2.0.0 - $context will be remove, use setContext method instead
     */
    public function __construct($context, string $contentType = 'application/vnd.api+json')
    {
        $this->httpClient = $this->httpClient ?? $this->createHttpClient();
        $this->context = $context;
        $this->contentType = $contentType;
    }

    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }

    protected function get(string $endpoint, array $additionalHeaders = []): ApiResponse
    {
        $response = $this->httpClient->get($endpoint, [
            'headers' => $this->getBasicHeaders($additionalHeaders)
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    protected function post(string $endpoint, array $data, array $additionalHeaders = []): ApiResponse
    {
        $response = $this->httpClient->post($endpoint, [
            'form_params' => $data,
            'headers' => $this->getBasicHeaders($additionalHeaders)
        ]);
        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    protected function getBasicHeaders(array $additionalHeaders = []): array
    {
        /** @var Context|null $context */
        $context = $this->context;
		Log::channel('api')->notice('$context - ' . print_r($context, true));

        if ($context === null) {
            throw new \Exception('Please call setContext method before sending the request');
        }

        $basicHeaders = array_merge([
            'Accept' => $this->contentType,
            'Authorization' => 'Bearer ' . $context->accessToken,
            'Content-Type' => 'application/json',
			'fail-on-error' => false
        ], $context->additionalHeaders);

        return array_merge($basicHeaders, $additionalHeaders);
    }

    protected function getFullUrl(string $path): string
    {
        /** @var Context|null $context */
        $context = $this->context;

        if ($context === null) {
            throw new \Exception('Please call setContext method before sending the request');
        }

        return $context->apiEndpoint . $path;
    }

    protected function buildQueryUrl(string $path, array $queries): string
    {
        /** @var Context|null $context */
        $context = $this->context;

        if ($context === null) {
            throw new \Exception('Please call setContext method before sending the request');
        }

        return $context->apiEndpoint . $path . '?' . http_build_query($queries);
    }

    protected static function handleResponse(string $data, array $headers): array
    {
        return \json_decode($data, true) ?? [];
    }

    protected static function getVersionHeader(string $versionId): array
    {
        return ['sw-version-id' => $versionId];
    }
}
