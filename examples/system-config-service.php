<?php

require __DIR__ . '/../vendor/autoload.php';

use TheCodeBunny\ShopwareApi\Data\Context;
use TheCodeBunny\ShopwareApi\Service\SystemConfigService;
use TheCodeBunny\ShopwareApi\Service\Struct\KeyValuePair;

class SystemConfigServiceExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);
        $service = new SystemConfigService($context);

        $config = KeyValuePair::create('my.config.key1', ['test' => 'my.config.value1']);

        $service->save($config);

        $config = $service->getConfiguration('core.basicInformation');
        dump($config);
    }
}

$example = new SystemConfigServiceExample();
$example->execute();