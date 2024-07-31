<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cache;
use Thecodebunny\ShopwareApi\Client\AdminAuthenticator;
use Thecodebunny\ShopwareApi\Client\GrantType\ClientCredentialsGrantType;

class Context
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
        //dump((int)(config('shopware-api.access_token_expires_at')));
        if (time() - (int)(config('shopware-api.access_token_expires_at')) > 9.5 * 60) {
            $grantType = new ClientCredentialsGrantType(config('shopware-api.access_key'),
                config('shopware-api.secret_access_key'));
            $adminClient = new AdminAuthenticator($grantType, config('shopware-api.shop_url'));
            $accessToken = $adminClient->fetchAccessToken()->accessToken;
            config([
                'shopware-api.access_token' => $accessToken,
                'shopware-api.access_token_expires_at' => strtotime('now'),
            ]);
            $fopen = fopen(base_path() . '/config/shopware-api.php', 'w');
            fwrite($fopen, '<?php return ' . var_export(config('shopware-api'), true) . ';');
            fclose($fopen);
            Config::set([
                'shopware-api.access_token' => $accessToken,
                'shopware-api.access_token_expires_at' => time(),
            ]);
            Cache::clear();
            echo '<span class="text-info-emphasis">Access token has been updated, sleeping for 3 seconds...</span></br>';
            sleep(2);
        } else {
            $accessToken = config('shopware-api.access_token');
        }
        return $accessToken;
    }
}
