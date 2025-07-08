<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErpSupplier;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * @method void add(PickwareErpSupplierEntity $entity)
 * @method void set(PickwareErpSupplierEntity $entity)
 * @method PickwareErpSupplierEntity[] getIterator()
 * @method PickwareErpSupplierEntity[] getElements()
 * @method PickwareErpSupplierEntity|null get(string $key)
 * @method PickwareErpSupplierEntity|null first()
 * @method PickwareErpSupplierEntity|null last()
 */
class PickwareErpSupplierCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PickwareErpSupplierEntity::class;
    }
}
