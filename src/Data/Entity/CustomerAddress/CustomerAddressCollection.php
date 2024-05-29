<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomerAddress;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CustomerAddressEntity $entity)
 * @method void set(CustomerAddressEntity $entity)
 * @method CustomerAddressEntity[] getIterator()
 * @method CustomerAddressEntity[] getElements()
 * @method CustomerAddressEntity|null get(string $key)
 * @method CustomerAddressEntity|null first()
 * @method CustomerAddressEntity|null last()
 */
class CustomerAddressCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CustomerAddressEntity::class;
    }
}
