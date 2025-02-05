<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErp;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * @method void add(PickwareErpEntity $entity)
 * @method void set(PickwareErpEntity $entity)
 * @method PickwareErpEntity[] getIterator()
 * @method PickwareErpEntity[] getElements()
 * @method PickwareErpEntity|null get(string $key)
 * @method PickwareErpEntity|null first()
 * @method PickwareErpEntity|null last()
 */
class PickwareErpCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PickwareErpEntity::class;
    }
}
