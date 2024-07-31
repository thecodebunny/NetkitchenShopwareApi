<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PickwareErpStockMovement;

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
class PickwareErpStockMovementDefinition implements EntityDefinition
{

	public const ENTITY_NAME = 'pickware_erp_stock_movement';
	
    private string $pickwareErpStockMovementEntity;

    public function __construct(string $pickwareErpStockMovementEntity)
    {
        $this->pickwareErpStockMovementEntity = $pickwareErpStockMovementEntity;
    }

    public function getEntityName() : string
    {
        return $this->pickwareErpStockMovementEntity;
    }

    public function getEntityClass() : string
    {
        return PickwareErpStockMovementEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PickwareErpStockMovementCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema($this->getEntityName(), new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', json_decode('[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]', true)), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', json_decode('[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource","Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource"]]', true)), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', json_decode('[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource","Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource"]]', true)), ]), []),
        ]));
    }
}
