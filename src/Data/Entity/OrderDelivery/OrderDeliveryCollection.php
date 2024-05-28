<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderDelivery;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(OrderDeliveryEntity $entity)
 * @method void set(OrderDeliveryEntity $entity)
 * @method OrderDeliveryEntity[] getIterator()
 * @method OrderDeliveryEntity[] getElements()
 * @method OrderDeliveryEntity|null get(string $key)
 * @method OrderDeliveryEntity|null first()
 * @method OrderDeliveryEntity|null last()
 */
class OrderDeliveryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return OrderDeliveryEntity::class;
    }
}
