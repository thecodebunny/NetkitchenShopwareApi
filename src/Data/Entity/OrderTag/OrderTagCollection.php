<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\OrderTag;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(OrderTagEntity $entity)
 * @method void set(OrderTagEntity $entity)
 * @method OrderTagEntity[] getIterator()
 * @method OrderTagEntity[] getElements()
 * @method OrderTagEntity|null get(string $key)
 * @method OrderTagEntity|null first()
 * @method OrderTagEntity|null last()
 */
class OrderTagCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return OrderTagEntity::class;
    }
}
