<?php

require __DIR__ . '/../vendor/autoload.php';

use \Thecodebunny\ShopwareApi\Client\GrantType\PasswordGrantType;
use \Thecodebunny\ShopwareApi\Client\GrantType\ClientCredentialsGrantType;
use \Thecodebunny\ShopwareApi\Client\GrantType\RefreshTokenGrantType;
use \Thecodebunny\ShopwareApi\Client\AdminAuthenticator;
use \Thecodebunny\ShopwareApi\Data\AccessToken;
use \Thecodebunny\ShopwareApi\Client\GrantType\GrantType;

class AuthenticationExample {
    public function exampleUsingPasswordGrantType(): AccessToken
    {
        $config = $this->getConfig();
        $grantType = new PasswordGrantType($config['username'], $config['password']);
        $adminClient = new AdminAuthenticator($grantType, $config['shop_url']);
        $accessToken = $adminClient->fetchAccessToken();

        dump("============================================");
        dump("Fetch access token using password grant type:");
        dump($accessToken);

        return $accessToken;
    }

    public function exampleUsingClientCredentials(): AccessToken
    {
        $config = $this->getConfig();
        $grantType = new ClientCredentialsGrantType($config['client_id'], $config['client_secret']);
        $adminClient = new AdminAuthenticator($grantType, $config['shop_url']);
        $accessToken = $adminClient->fetchAccessToken();

        dump("============================================");
        dump("Fetch access token using client credential grant type: \n");
        dump($accessToken);

        return $accessToken;
    }

    public function exampleUsingRefreshToken(): AccessToken
    {
        $config = $this->getConfig();

        $grantType = new PasswordGrantType($config['username'], $config['password']);
        $adminClient = new AdminAuthenticator($grantType, $config['shop_url']);
        $passwordAccessToken = $adminClient->fetchAccessToken();


        $grantType = new RefreshTokenGrantType($passwordAccessToken->refreshToken);
        $adminClient = new AdminAuthenticator($grantType, $config['shop_url']);
        $refreshToken = $adminClient->fetchAccessToken();

        dump("============================================");
        dump("Fetch access token using refresh grant type:");
        dump($refreshToken);

        return $refreshToken;
    }

    public function exampleUsingConfig(): AccessToken
    {
        $config = $this->getConfig();
        $config['grant_type'] = 'password';

        $grantType = GrantType::createFromConfig($config);

        $adminClient = new AdminAuthenticator($grantType, $config['shop_url']);
        $passwordAccessToken = $adminClient->fetchAccessToken();

        dump("============================================");
        dump("Fetch access token using array config:");
        dump($passwordAccessToken);

        return $passwordAccessToken;
    }

    public function execute(): void
    {
        $this->exampleUsingPasswordGrantType();
        $this->exampleUsingClientCredentials();
        $this->exampleUsingRefreshToken();
        $this->exampleUsingConfig();
    }

    private function getConfig(): array
    {
        return json_decode(file_get_contents(__DIR__ . '/auth-config.json'), true);
    }
}

$authExample = new AuthenticationExample();
$authExample->execute();
