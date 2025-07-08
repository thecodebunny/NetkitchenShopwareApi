<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErpSupplierOrder;

use Thecodebunny\ShopwareApi\Data\Entity\EntityDefinition;
use Thecodebunny\ShopwareApi\Data\Schema\Flag;
use Thecodebunny\ShopwareApi\Data\Schema\FlagCollection;
use Thecodebunny\ShopwareApi\Data\Schema\Property;
use Thecodebunny\ShopwareApi\Data\Schema\PropertyCollection;
use Thecodebunny\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PickwareErpSupplierOrderDefinition implements EntityDefinition
{

	public const ENTITY_NAME = 'pickware_erp_supplier_order';

    private string $pickwareErpSupplierOrderEntity;

    public function __construct(string $pickwareErpSupplierOrderEntity)
    {
        $this->pickwareErpSupplierOrderEntity = $pickwareErpSupplierOrderEntity;
    }

    public function getEntityName() : string
    {
        return $this->pickwareErpSupplierOrderEntity;
    }

    public function getEntityClass() : string
    {
        return PickwareErpSupplierOrderEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PickwareErpSupplierOrderCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema($this->getEntityName(), new PropertyCollection());
    }
}
