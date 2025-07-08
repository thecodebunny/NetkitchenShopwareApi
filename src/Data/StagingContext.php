<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cache;
use Thecodebunny\ShopwareApi\Client\AdminAuthenticator;
use Thecodebunny\ShopwareApi\Client\GrantType\ClientCredentialsGrantType;

class StagingContext
{
    use EndPointTrait;

    public string $languageId = Defaults::LANGUAGE_SYSTEM;

    public string $currencyId = Defaults::CURRENCY;

    public string $versionId = Defaults::LIVE_VERSION;

    public bool $compatibility = true;

    public bool $inheritance = true;

    public string $accessToken;

    public string $apiEndpoint;

    public array $additionalHeaders;

	public int $time;

    public function __construct(
        string $accessToken = '',
        string $languageId = Defaults::LANGUAGE_SYSTEM,
        string $currencyId = Defaults::CURRENCY,
        string $versionId = Defaults::LIVE_VERSION,
        bool $compatibility = true,
        bool $inheritance = true,
		int $time = 0,
        array $additionalHeaders = []
    ) {
        $this->languageId = $languageId;
        $this->currencyId = $currencyId;
        $this->versionId = $versionId;
        $this->compatibility = $compatibility;
        $this->inheritance = $inheritance;
		$this->time = (int) config('shopware-api.access_token_expires_at.default');
        $this->accessToken = $this->accessTokens();
        $this->apiEndpoint = $this->removeLastSlashes(config('shopware-api.shop_url_staging'));
        $this->additionalHeaders = $additionalHeaders;
    }

    public function accessTokens(): string
    {
		if (time() - (int)(config('shopware-api.access_token_expires_at.staging')) > (8 * 60)) {
			$grantType = new ClientCredentialsGrantType(config('shopware-api.access_key.default'),config('shopware-api.secret_access_key.default'));
			$adminClient = new AdminAuthenticator($grantType, 'https://tuulzone.nksw.dev/');
			$accessToken = $adminClient->fetchAccessToken()->accessToken;
			config([
				'shopware-api.access_token.staging' => $accessToken,
				'shopware-api.access_token_expires_at.staging' => strtotime('now'),
			]);
			$fopen = fopen(base_path() . '/config/shopware-api.php', 'w');
			fwrite($fopen, '<?php return ' . var_export(config('shopware-api'), true) . ';');
			fclose($fopen);
		} else {
			$accessToken = config('shopware-api.access_token.staging');
		}

		return $accessToken;
    }
}
