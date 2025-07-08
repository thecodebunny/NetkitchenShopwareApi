<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErpStock;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * @method void add(PickwareErpStockEntity $entity)
 * @method void set(PickwareErpStockEntity $entity)
 * @method PickwareErpStockEntity[] getIterator()
 * @method PickwareErpStockEntity[] getElements()
 * @method PickwareErpStockEntity|null get(string $key)
 * @method PickwareErpStockEntity|null first()
 * @method PickwareErpStockEntity|null last()
 */
class PickwareErpStockCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PickwareErpStockEntity::class;
    }
}
