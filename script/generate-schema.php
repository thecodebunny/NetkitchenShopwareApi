<?php

require __DIR__ . '/vendor/autoload.php';

use Thecodebunny\ShopwareApi\Service\InfoService;
use Vin\Script\CodeGenerator;
use Thecodebunny\ShopwareApi\Client\GrantType\GrantType;
use Thecodebunny\ShopwareApi\Client\AdminAuthenticator;
use Thecodebunny\ShopwareApi\Data\Context;

$config = file_get_contents(__DIR__ . '/config.json');
$config = json_decode($config, true);

$grantType = GrantType::createFromConfig($config);
$adminClient = new AdminAuthenticator($grantType, $config['shop_url']);
$token = $adminClient->fetchAccessToken();
$context = new Context($config['shop_url'], $token);

$schema = CodeGenerator::refreshSchema(new InfoService($context), $config['output_resource_dir']);
CodeGenerator::generateResourcesFromSchema($schema, $config['output_entity_dir'], $config['sdk_entity_namespace'], $config['output_resource_dir']);
