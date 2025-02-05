<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Thecodebunny\ShopwareApi\Client\AdminAuthenticator;
use Thecodebunny\ShopwareApi\Client\GrantType\ClientCredentialsGrantType;

class ProductUploadContext
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

    public function __construct(
        string $accessToken = '',
        string $languageId = Defaults::LANGUAGE_SYSTEM,
        string $currencyId = Defaults::CURRENCY,
        string $versionId = Defaults::LIVE_VERSION,
        bool $compatibility = true,
        bool $inheritance = true,
        array $additionalHeaders = []
    ) {
        $this->languageId = $languageId;
        $this->currencyId = $currencyId;
        $this->versionId = $versionId;
        $this->compatibility = $compatibility;
        $this->inheritance = $inheritance;
        $this->accessToken = $this->accessTokens();
        $this->apiEndpoint = $this->removeLastSlashes(config('shopware-api.shop_url'));
        $this->additionalHeaders = $additionalHeaders;
    }

    public function accessTokens(): string
    {
		Log::channel('productupload')->notice('product_upload Token valid? = ' . (time() - (int)(config('shopware-api.access_token_expires_at.product_upload'))));

		if (time() - (int)(config('shopware-api.access_token_expires_at.product_upload')) > (8 * 60)) {
			Log::channel('productupload')->notice('Getting new token.');
			Artisan::call('config:clear');
			$grantType = new ClientCredentialsGrantType(config('shopware-api.access_key.product_upload'),config('shopware-api.secret_access_key.product_upload'));
			$adminClient = new AdminAuthenticator($grantType, config('shopware-api.shop_url'));
			$accessToken = $adminClient->fetchAccessToken()->accessToken;
			config([
				'shopware-api.access_token.product_upload' => $accessToken,
				'shopware-api.access_token_expires_at.product_upload' => strtotime('now'),
			]);
			$fopen = fopen(base_path() . '/config/shopware-api.php', 'w');
			fwrite($fopen, '<?php return ' . var_export(config('shopware-api'), true) . ';');
			fclose($fopen);
			Artisan::call('config:clear');
			Artisan::call('config:cache');
		} else {
			$accessToken = config('shopware-api.access_token.product_upload');
		}
		return $accessToken;
    }
}
