<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;
use TheCodeBunny\ShopwareApi\Data\AccessToken;
use TheCodeBunny\ShopwareApi\Data\Context;
use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductDefinition;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Data\Uuid\Uuid;
use TheCodeBunny\ShopwareApi\Factory\RepositoryFactory;
use TheCodeBunny\ShopwareApi\Hydrate\EntityHydrator;
use TheCodeBunny\ShopwareApi\Client\Client;

/**
 * @covers \TheCodeBunny\ShopwareApi\Hydrate\EntityHydrator
 */
class EntityHydratorTest extends TestCase
{
    private EntityHydrator $entityHydrator;
    private MockHandler $mock;
    private Context $context;

    protected function setUp(): void
    {
        $this->context = new Context('http://test.com', new AccessToken('mock-token'));
        $this->mock = new MockHandler();

        $handlerStack = HandlerStack::create($this->mock);

        $client = Client::create(['handler' => $handlerStack]);

        $this->entityHydrator = new EntityHydrator(false);
        $this->productRepository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);

        $this->productRepository->setHttpClient($client);
    }

    public function testHydrateSearchResultWithEmptyResult(): void
    {
        $result = $this->entityHydrator->hydrateSearchResult([], $this->context);

        static::assertInstanceOf(EntityCollection::class, $result);

        $result = $this->entityHydrator->hydrateSearchResult([], $this->context, 'product');

        static::assertInstanceOf(ProductCollection::class, $result);
    }

    public function testHydrateSearchResultWithResult(): void
    {
        $productId = Uuid::randomHex();
        $result = $this->entityHydrator->hydrateSearchResult([
            'data' => [
                [
                    'attributes' => [
                        'name' => 'Test Product',
                    ],
                    'type' => 'product',
                    'id' => $productId,
                ]
            ],
        ], $this->context, 'product');

        static::assertInstanceOf(ProductCollection::class, $result);
        static::assertCount(1, $result);
        static::assertInstanceOf(ProductEntity::class, $result->get($productId));
    }
}
