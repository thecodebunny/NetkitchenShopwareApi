<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CustomFieldSet;

use Thecodebunny\ShopwareApi\Data\Entity\EntityDefinition;
use Thecodebunny\ShopwareApi\Data\Schema\PropertyCollection;
use Thecodebunny\ShopwareApi\Data\Schema\FlagCollection;
use Thecodebunny\ShopwareApi\Data\Schema\Property;
use Thecodebunny\ShopwareApi\Data\Schema\Flag;
use Thecodebunny\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'custom_field_set';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomFieldSetEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomFieldSetCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('custom_field_set', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('name', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('config', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('active', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('global', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('position', 'int', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('appId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('customFields', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1), ]), ['entity' => 'custom_field', 'referenceField' => 'customFieldSetId', 'localField' => 'id', 'relation' => 'one_to_many', ]),
            new Property('relations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1), ]), ['entity' => 'custom_field_set_relation', 'referenceField' => 'customFieldSetId', 'localField' => 'id', 'relation' => 'one_to_many', ]),
            new Property('products', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1), new Flag('reversed_inherited', 'customFieldSets'), ]), ['entity' => 'product', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('app', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'app', 'referenceField' => 'id', 'localField' => 'appId', 'relation' => 'many_to_one', ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
