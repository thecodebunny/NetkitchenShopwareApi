<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomerGroupRegistrationSalesChannels;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CustomerGroupRegistrationSalesChannelsEntity $entity)
 * @method void set(CustomerGroupRegistrationSalesChannelsEntity $entity)
 * @method CustomerGroupRegistrationSalesChannelsEntity[] getIterator()
 * @method CustomerGroupRegistrationSalesChannelsEntity[] getElements()
 * @method CustomerGroupRegistrationSalesChannelsEntity|null get(string $key)
 * @method CustomerGroupRegistrationSalesChannelsEntity|null first()
 * @method CustomerGroupRegistrationSalesChannelsEntity|null last()
 */
class CustomerGroupRegistrationSalesChannelsCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CustomerGroupRegistrationSalesChannelsEntity::class;
    }
}
