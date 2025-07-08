<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErpSupplier;

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
class PickwareErpSupplierDefinition implements EntityDefinition
{

	public const ENTITY_NAME = 'pickware_erp_supplier';

    private string $pickwareErpSupplierEntity;

    public function __construct(string $pickwareErpSupplierEntity)
    {
        $this->pickwareErpSupplierEntity = $pickwareErpSupplierEntity;
    }

    public function getEntityName() : string
    {
        return $this->pickwareErpSupplierEntity;
    }

    public function getEntityClass() : string
    {
        return PickwareErpSupplierEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PickwareErpSupplierCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema($this->getEntityName(), new PropertyCollection());
    }
}
