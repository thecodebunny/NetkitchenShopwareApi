<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cache;
use Thecodebunny\ShopwareApi\Client\AdminAuthenticator;
use Thecodebunny\ShopwareApi\Client\GrantType\ClientCredentialsGrantType;

class ToContext extends Context
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
        $this->apiEndpoint = $this->removeLastSlashes(config('shopware-api.to-shopware-shop_url'));
        $this->additionalHeaders = $additionalHeaders;
    }

    public function accessTokens(): string
    {
        if (time() - (int)(config('shopware-api.to-shopware-access_token_expires_at')) > 6 * 60) {
			Cache::clear();
            $grantType = new ClientCredentialsGrantType(config('shopware-api.to-shopware-access_key'),config('shopware-api.to-shopware-secret_access_key'));
            $adminClient = new AdminAuthenticator($grantType, config('shopware-api.to-shopware-shop_url'));
            $accessToken = $adminClient->fetchAccessToken()->accessToken;

			Config::write('shopware-api.to-shopware-access_token', $accessToken);
			Config::write('shopware-api.to-shopware-access_token_expires_at', strtotime('now'));
			//Artisan::call('config:clear');
        } else {
            $accessToken = config('shopware-api.to-shopware-access_token');
        }
        return $accessToken;
    }
}
