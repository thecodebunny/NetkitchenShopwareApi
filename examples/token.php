<?php

require __DIR__ . '/../vendor/autoload.php';

use \Thecodebunny\ShopwareApi\Client\GrantType\PasswordGrantType;
use \Thecodebunny\ShopwareApi\Client\AdminAuthenticator;

$config = json_decode(file_get_contents(__DIR__ . '/auth-config.json'), true);
$grantType = new PasswordGrantType($config['username'], $config['password']);
$adminClient = new AdminAuthenticator($grantType, $config['shop_url']);
$accessToken = $adminClient->fetchAccessToken();