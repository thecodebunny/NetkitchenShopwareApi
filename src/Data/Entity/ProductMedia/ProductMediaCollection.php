<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductMedia;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductMediaEntity $entity)
 * @method void set(ProductMediaEntity $entity)
 * @method ProductMediaEntity[] getIterator()
 * @method ProductMediaEntity[] getElements()
 * @method ProductMediaEntity|null get(string $key)
 * @method ProductMediaEntity|null first()
 * @method ProductMediaEntity|null last()
 */
class ProductMediaCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductMediaEntity::class;
    }
}
