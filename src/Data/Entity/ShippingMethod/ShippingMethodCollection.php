<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ShippingMethod;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ShippingMethodEntity $entity)
 * @method void set(ShippingMethodEntity $entity)
 * @method ShippingMethodEntity[] getIterator()
 * @method ShippingMethodEntity[] getElements()
 * @method ShippingMethodEntity|null get(string $key)
 * @method ShippingMethodEntity|null first()
 * @method ShippingMethodEntity|null last()
 */
class ShippingMethodCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ShippingMethodEntity::class;
    }
}
