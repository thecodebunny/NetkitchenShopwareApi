<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannelShippingMethod;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelShippingMethodEntity $entity)
 * @method void set(SalesChannelShippingMethodEntity $entity)
 * @method SalesChannelShippingMethodEntity[] getIterator()
 * @method SalesChannelShippingMethodEntity[] getElements()
 * @method SalesChannelShippingMethodEntity|null get(string $key)
 * @method SalesChannelShippingMethodEntity|null first()
 * @method SalesChannelShippingMethodEntity|null last()
 */
class SalesChannelShippingMethodCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SalesChannelShippingMethodEntity::class;
    }
}
