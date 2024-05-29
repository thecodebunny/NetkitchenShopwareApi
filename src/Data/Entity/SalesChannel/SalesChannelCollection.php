<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelEntity $entity)
 * @method void set(SalesChannelEntity $entity)
 * @method SalesChannelEntity[] getIterator()
 * @method SalesChannelEntity[] getElements()
 * @method SalesChannelEntity|null get(string $key)
 * @method SalesChannelEntity|null first()
 * @method SalesChannelEntity|null last()
 */
class SalesChannelCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SalesChannelEntity::class;
    }
}
