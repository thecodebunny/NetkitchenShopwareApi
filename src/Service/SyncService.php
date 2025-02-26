<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Service;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Support\Facades\Log;
use Thecodebunny\ShopwareApi\Exception\ShopwareResponseException;
use Thecodebunny\ShopwareApi\Service\Struct\SyncPayload;
use Throwable;

class SyncService extends ApiService
{
	private const SYNC_ENDPOINT = "/api/_action/sync";

	/**
	 * @throws ShopwareResponseException
	 */
	public function sync(
		SyncPayload $payload,
		array       $additionalParams = [],
		array       $additionalHeaders = ["fail-on-error" => false,]
	)
	{
		try {

			Log::info('Starting Shopware sync', [
				'endpoint' => $this->getFullUrl(self::SYNC_ENDPOINT),
				'payload' => $payload->parse(),
			]);

			$response = $this->httpClient->post(
				$this->getFullUrl(self::SYNC_ENDPOINT),
				[
					"headers" => $this->getBasicHeaders($additionalHeaders),
					"body" => json_encode(array_merge($payload->parse(), $additionalParams)),
					"connect_timeout" => 10,
					"timeout" => 60,
				]
			);

			$contents = self::handleResponse(
				$response->getBody()->getContents(),
				$response->getHeaders()
			);

			return new ApiResponse(
				$contents,
				$response->getHeaders(),
				$response->getStatusCode()
			);

		} catch (ConnectException $exception) {
			throw $exception;
		} catch (BadResponseException $exception) {
			$message = $exception->getResponse()->getBody()->getContents();
			//Log::debug('$payload NEW - ' . print_r($payload, true));
			//Log::debug('Exception NEW - ' . print_r($exception, true));
			throw new ShopwareResponseException(
				$message,
				$exception->getResponse()->getStatusCode(),
				$exception
			);
		} catch (Throwable $t) {
			throw $t;
		}
	}
	public function getRequestData(
		SyncPayload $payload,
		array $additionalParams = [],
		array $additionalHeaders = ["fail-on-error" => false,]
	): array
	{
		try {
			$endpoint = $this->getFullUrl(self::SYNC_ENDPOINT);
			$headers = $this->getBasicHeaders($additionalHeaders);
			$body = array_merge($payload->parse(), $additionalParams);
			if ($body === false) {
				throw new \RuntimeException('JSON encoding error: ' . json_last_error_msg());
			}
			return compact('endpoint', 'headers', 'body');
		} catch (\Exception $e) {
			throw $e;
		}
	}
}
