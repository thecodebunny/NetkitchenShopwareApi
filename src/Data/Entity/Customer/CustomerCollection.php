<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Customer;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CustomerEntity $entity)
 * @method void set(CustomerEntity $entity)
 * @method CustomerEntity[] getIterator()
 * @method CustomerEntity[] getElements()
 * @method CustomerEntity|null get(string $key)
 * @method CustomerEntity|null first()
 * @method CustomerEntity|null last()
 */
class CustomerCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CustomerEntity::class;
    }
}
