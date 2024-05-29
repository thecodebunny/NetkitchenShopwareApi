<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductVisibility;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductVisibilityEntity $entity)
 * @method void set(ProductVisibilityEntity $entity)
 * @method ProductVisibilityEntity[] getIterator()
 * @method ProductVisibilityEntity[] getElements()
 * @method ProductVisibilityEntity|null get(string $key)
 * @method ProductVisibilityEntity|null first()
 * @method ProductVisibilityEntity|null last()
 */
class ProductVisibilityCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductVisibilityEntity::class;
    }
}
