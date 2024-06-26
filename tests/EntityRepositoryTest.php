<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Thecodebunny\ShopwareApi\Data\AccessToken;
use Thecodebunny\ShopwareApi\Data\Context;
use Thecodebunny\ShopwareApi\Data\Criteria;
use Thecodebunny\ShopwareApi\Data\Entity\Custom\CustomDefinition;
use Thecodebunny\ShopwareApi\Data\Entity\Custom\CustomEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductDefinition;
use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Schema\PropertyCollection;
use Thecodebunny\ShopwareApi\Data\Schema\Schema;
use Thecodebunny\ShopwareApi\Data\Uuid\Uuid;
use Thecodebunny\ShopwareApi\Exception\ShopwareResponseException;
use Thecodebunny\ShopwareApi\Factory\RepositoryFactory;
use Thecodebunny\ShopwareApi\Hydrate\EntityHydrator;
use Thecodebunny\ShopwareApi\Repository\EntityRepository;
use Thecodebunny\ShopwareApi\Repository\Struct\EntitySearchResult;
use Thecodebunny\ShopwareApi\Repository\Struct\IdSearchResult;
use Thecodebunny\ShopwareApi\Client\Client;

/**
 * @covers \Thecodebunny\ShopwareApi\Repository\EntityRepository
 */
class EntityRepositoryTest extends TestCase
{
    private EntityRepository $productRepository;
    private MockHandler $mock;
    private Context $context;

    protected function setUp(): void
    {
        $this->context = new Context('http://test.com', new AccessToken('mock-token'));
        $this->mock = new MockHandler();

        $handlerStack = HandlerStack::create($this->mock);

        $client = Client::create(['handler' => $handlerStack]);

        $this->productRepository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);

        $this->productRepository->setHttpClient($client);
    }

    public function testSearchBadResponse(): void
    {
        static::expectException(ShopwareResponseException::class);
        static::expectExceptionMessage('Unauthenticated');
        static::expectExceptionCode(401);

        $this->mock->append(new BadResponseException('Unauthenticated', new Request('POST', 'test'), new Response(401, [], 'Unauthenticated')));

        $this->productRepository->get('product-id', new Criteria(), $this->context);
    }

    public function testGet(): void
    {
        $productId = '6bfa486a2c4c4e0db32c6a252baf6b3a';
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/' . $productId . '.json')));

        /** @var ProductEntity $product */
        $product = $this->productRepository->get($productId, new Criteria(), $this->context);

        static::assertEquals(ProductDefinition::ENTITY_NAME, $product->getEntityName());
        static::assertInstanceOf(ProductEntity::class, $product);
        static::assertEquals('Gorgeous Timo Thiago Perfomancer', $product->name);
        static::assertEquals($productId, $product->id);
        static::assertEquals('Gorgeous Timo Thiago Perfomancer', $product->getTranslated()['name']);
    }

    public function testSearch(): void
    {
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/products.json')));

        $result = $this->productRepository->search(new Criteria(), $this->context);

        static::assertInstanceOf(EntitySearchResult::class, $result);
        static::assertInstanceOf(ProductCollection::class, $result->getEntities());
        static::assertInstanceOf(ProductEntity::class, $result->first());
        static::assertInstanceOf(ProductEntity::class, $result->last());
        static::assertEquals(25, $result->count());
        static::assertCount(25, $result->getEntities());
        static::assertEquals(65, $result->getMeta()->getTotal());
        static::assertEquals(Criteria::TOTAL_COUNT_MODE_EXACT, $result->getMeta()->getTotalCountMode());
        static::assertInstanceOf(ProductEntity::class, $result->get('4aa38f2ec4554d01a3e109f52923dbeb'));
        static::assertNull($result->get(Uuid::randomHex()));
        static::assertEquals('4aa38f2ec4554d01a3e109f52923dbeb', $result->first()->id);
        static::assertEquals('NEW PRODUCT', $result->first()->name);
        static::assertEquals('53280fa43009419ca3b0f2d9193dcdd0', $result->last()->id);
        static::assertEquals('Gorgeous Plastic FaceField', $result->last()->name);
    }

    public function testSearchCustom(): void
    {
        $customId = '6bfa486a2c4c4e0db32c6a252baf6b3a';
        $this->mock->append(new Response(200, ['test'=> 324], file_get_contents(__DIR__ . '/stubs/custom.json')));

        $handlerStack = HandlerStack::create($this->mock);

        $client = Client::create(['handler' => $handlerStack]);

        $hydrator = $this->getMockBuilder(EntityHydrator::class)->onlyMethods(['schema'])->getMock();
        $repository = new EntityRepository(
            'custom',
            new CustomDefinition('custom'),
            '/',
            $hydrator
        );

        $hydrator->method('schema')->willReturn(new Schema('custom', new PropertyCollection()));
        $repository->setHttpClient($client);

        /** @var CustomEntity $result */
        $result = $repository->get($customId, new Criteria(), $this->context);

        static::assertEquals('custom', $result->getEntityName());
        static::assertInstanceOf(CustomEntity::class, $result);
    }

    public function testSearchIds(): void
    {
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/product-ids.json')));

        $result = $this->productRepository->searchIds(new Criteria(), $this->context);

        static::assertInstanceOf(IdSearchResult::class, $result);
        static::assertEquals('fb170089052445f19ef4420a648d0d49', $result->firstId());
        static::assertCount(25, $result->getData());
        static::assertEquals(69, $result->getTotal());
    }

    public function testSearchShouldThrowShopwareHttpException(): void
    {
        static::expectException(ShopwareResponseException::class);
        static::expectExceptionMessage('Unauthenticated');
        static::expectExceptionCode(401);

        $this->mock->append(new BadResponseException('Unauthenticated', new Request('POST', 'test'), new Response(401, [], 'Unauthenticated')));

        $this->productRepository->searchIds(new Criteria(), $this->context);
    }

    public function testCreateNew(): void
    {
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/product-ids.json')));

        $result = $this->productRepository->createNew([
            'id' => Uuid::randomHex(),
            'name' => 'New Product'
        ]);

        static::assertInstanceOf(ProductEntity::class, $result);
    }
}
