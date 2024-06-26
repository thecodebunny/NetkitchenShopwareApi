<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\NumberRangeState;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(NumberRangeStateEntity $entity)
 * @method void set(NumberRangeStateEntity $entity)
 * @method NumberRangeStateEntity[] getIterator()
 * @method NumberRangeStateEntity[] getElements()
 * @method NumberRangeStateEntity|null get(string $key)
 * @method NumberRangeStateEntity|null first()
 * @method NumberRangeStateEntity|null last()
 */
class NumberRangeStateCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return NumberRangeStateEntity::class;
    }
}
