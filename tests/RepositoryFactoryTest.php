<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use TheCodeBunny\ShopwareApi\Data\Entity\Custom\CustomCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Custom\CustomDefinition;
use TheCodeBunny\ShopwareApi\Data\Entity\Custom\CustomEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerDefinition;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;
use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductDefinition;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Factory\RepositoryFactory;
use TheCodeBunny\ShopwareApi\Repository\EntityRepository;

/**
 * @covers \TheCodeBunny\ShopwareApi\Factory\RepositoryFactory
 */
class RepositoryFactoryTest extends TestCase
{
    public function testCreateEntity(): void
    {
        $repository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);

        static::assertInstanceOf(EntityRepository::class, $repository);
        static::assertInstanceOf(ProductDefinition::class, $repository->getDefinition());
        static::assertEquals('product', $repository->getDefinition()->getEntityName());
        static::assertEquals(ProductEntity::class, $repository->getDefinition()->getEntityClass());
        static::assertEquals(ProductCollection::class, $repository->getDefinition()->getEntityCollection());
    }

    public function testCreateCustomEntity(): void
    {
        $repository = RepositoryFactory::create('my_custom_entity');

        static::assertInstanceOf(EntityRepository::class, $repository);
        static::assertInstanceOf(CustomDefinition::class, $repository->getDefinition());
        static::assertEquals('my_custom_entity', $repository->getDefinition()->getEntityName());
        static::assertEquals(CustomEntity::class, $repository->getDefinition()->getEntityClass());
        static::assertEquals(CustomCollection::class, $repository->getDefinition()->getEntityCollection());
    }

    public function testCreateFromCustomDefinition(): void
    {
        $repository = RepositoryFactory::createFromDefinition(new CustomerDefinition());

        static::assertInstanceOf(EntityRepository::class, $repository);
        static::assertInstanceOf(CustomerDefinition::class, $repository->getDefinition());
        static::assertEquals(CustomerDefinition::ENTITY_NAME, $repository->getDefinition()->getEntityName());
        static::assertEquals(CustomerEntity::class, $repository->getDefinition()->getEntityClass());
        static::assertEquals(CustomerCollection::class, $repository->getDefinition()->getEntityCollection());
    }

    public function testAllEntitiesClassesAreCreated(): void
    {
        $entityMapping = file_get_contents(__DIR__ . '/../src/Resources/entity-mapping.json');

        $entityMapping = json_decode($entityMapping, true);

        foreach ($entityMapping as $entity => $definition) {
            $repository = RepositoryFactory::create($entity);

            static::assertInstanceOf(EntityRepository::class, $repository);

            if (!class_exists($definition)) {
                $definition = CustomDefinition::class;
            }

            static::assertInstanceOf(EntityRepository::class, $repository);
            static::assertInstanceOf($definition, $repository->getDefinition());
            static::assertEquals($entity, $repository->getDefinition()->getEntityName());
            static::assertTrue(is_subclass_of($repository->getDefinition()->getEntityClass(), Entity::class));
            static::assertTrue(is_subclass_of($repository->getDefinition()->getEntityCollection(), EntityCollection::class));
        }
    }
}
