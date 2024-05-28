<?php

require __DIR__ . '/../vendor/autoload.php';

use Netktichen\ShopwareApi\Data\Context;
use Netktichen\ShopwareApi\Service\AdminSearchService;
use Netktichen\ShopwareApi\Data\Criteria;
use Netktichen\ShopwareApi\Service\Struct\KeyValuePairs;
use Netktichen\ShopwareApi\Service\Struct\KeyValuePair;

class AdminSearchExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);
        $service = new AdminSearchService($context);

        $productCriteria = new Criteria();
        $productCriteria->addAssociation('categories');
        $productCriteria->setTerm('feeb9f03a8ca49749f8cce86c9a3d4d7');

        $customerCriteria = new Criteria();
        $customerCriteria->setTerm('501e41803e7b4ca8b54a7ed72b498568pharvey@example.com');

        $criteriaCollection = new KeyValuePairs();
        $criteriaCollection->add(KeyValuePair::create('product', $productCriteria));
        $criteriaCollection->add(KeyValuePair::create('customer', $customerCriteria));

        $result = $service->search($criteriaCollection);

        dd($result);
    }
}

$example = new AdminSearchExample();
$example->execute();