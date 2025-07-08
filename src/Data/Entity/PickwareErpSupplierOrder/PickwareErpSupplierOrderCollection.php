<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErpSupplierOrder;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * @method void add(PickwareErpSupplierOrderEntity $entity)
 * @method void set(PickwareErpSupplierOrderEntity $entity)
 * @method PickwareErpSupplierOrderEntity[] getIterator()
 * @method PickwareErpSupplierOrderEntity[] getElements()
 * @method PickwareErpSupplierOrderEntity|null get(string $key)
 * @method PickwareErpSupplierOrderEntity|null first()
 * @method PickwareErpSupplierOrderEntity|null last()
 */
class PickwareErpSupplierOrderCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PickwareErpSupplierOrderEntity::class;
    }
}
