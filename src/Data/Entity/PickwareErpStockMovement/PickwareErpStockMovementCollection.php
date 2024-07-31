<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErpStockMovement;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * @method void add(PickwareErpStockMovementEntity $entity)
 * @method void set(PickwareErpStockMovementEntity $entity)
 * @method PickwareErpStockMovementEntity[] getIterator()
 * @method PickwareErpStockMovementEntity[] getElements()
 * @method PickwareErpStockMovementEntity|null get(string $key)
 * @method PickwareErpStockMovementEntity|null first()
 * @method PickwareErpStockMovementEntity|null last()
 */
class PickwareErpStockMovementCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PickwareErpStockMovementEntity::class;
    }
}
