<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\OrderCustomer;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(OrderCustomerEntity $entity)
 * @method void set(OrderCustomerEntity $entity)
 * @method OrderCustomerEntity[] getIterator()
 * @method OrderCustomerEntity[] getElements()
 * @method OrderCustomerEntity|null get(string $key)
 * @method OrderCustomerEntity|null first()
 * @method OrderCustomerEntity|null last()
 */
class OrderCustomerCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return OrderCustomerEntity::class;
    }
}
