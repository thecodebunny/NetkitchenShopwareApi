<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\DeliveryTime;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(DeliveryTimeEntity $entity)
 * @method void set(DeliveryTimeEntity $entity)
 * @method DeliveryTimeEntity[] getIterator()
 * @method DeliveryTimeEntity[] getElements()
 * @method DeliveryTimeEntity|null get(string $key)
 * @method DeliveryTimeEntity|null first()
 * @method DeliveryTimeEntity|null last()
 */
class DeliveryTimeCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return DeliveryTimeEntity::class;
    }
}
