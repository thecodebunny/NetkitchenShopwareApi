<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductProperty;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductPropertyEntity $entity)
 * @method void set(ProductPropertyEntity $entity)
 * @method ProductPropertyEntity[] getIterator()
 * @method ProductPropertyEntity[] getElements()
 * @method ProductPropertyEntity|null get(string $key)
 * @method ProductPropertyEntity|null first()
 * @method ProductPropertyEntity|null last()
 */
class ProductPropertyCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductPropertyEntity::class;
    }
}
