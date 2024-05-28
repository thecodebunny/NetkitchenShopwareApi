<?php

require __DIR__ . '/../vendor/autoload.php';

use Netktichen\ShopwareApi\Data\Context;
use Netktichen\ShopwareApi\Data\Entity\Product\ProductDefinition;
use Netktichen\ShopwareApi\Exception\ShopwareResponseException;
use Netktichen\ShopwareApi\Factory\RepositoryFactory;
use Netktichen\ShopwareApi\Data\Criteria;
use Netktichen\ShopwareApi\Data\Filter\ContainsFilter;
use Netktichen\ShopwareApi\Data\Aggregation\SumAggregation;
use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Aggregation\CountAggregation;
use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Uuid\Uuid;
use Netktichen\ShopwareApi\Data\FieldSorting;

class EntityRepositoryExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);

        $productRepository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);

        $criteria = new Criteria();
        $productIds = $productRepository->searchIds($criteria, $context);

        // Search api using repositories and criteria
        $criteria = new Criteria();
        $criteria->setLimit(1);
        $criteria->addAssociation('categories');
        $criteria->addSorting(new FieldSorting('name', FieldSorting::DESCENDING));
        $criteria->addFilter(new ContainsFilter('name', 'A'));
        $criteria->addAggregation(new SumAggregation('sumStock', 'stock'));
        $criteria->addAggregation(new CountAggregation('countId', 'id'));

        $products = $productRepository->search($criteria, $context);

        /** @var ProductCollection $productCollection */
        $productCollection = $products->getEntities();

        $productId = $productCollection->first()->id;

        // Repository get
        /** @var ProductEntity $product */
        $product = $productRepository->get($productId, $criteria, $context);

        // Example update and Catch error response
        try {
            $productRepository->update([
                'id' => $productId,
                'name' => 'Edited name' . time(),
                'stock' => 'abc'
            ], $context);
        } catch (ShopwareResponseException $exception) {
            // "errors" => [
            //    0 => [
            //      "code" => "ba785a8c-82cb-4283-967c-3cf342181b40"
            //      "status" => "400"
            //      "detail" => "This value should be of type int."
            //      "template" => "This value should be of type {{ type }}."
            //      "meta" => [
            //        "parameters" => array:2 [
            //          "{{ value }}" => ""abc""
            //          "{{ type }}" => "int"
            //        ]
            //      ]
            //      "source" => [
            //        "pointer" => "/0/stock"
            //      ]
            //    ]
            //  ]
            $exception->getResponse();
        }

            // Example Create
            $productRepository->create([
                'id' => Uuid::randomHex(),
                'name' => 'New Product',
                'taxId' => $product->taxId,
                'price' => $product->price,
                'productNumber' => $product->productNumber . random_int(10, 1000),
                'stock' => $product->stock,
            ], $context);

            // Example Delete
            $productRepository->delete($productId, $context);
    }
}

$example = new EntityRepositoryExample();
$example->execute();