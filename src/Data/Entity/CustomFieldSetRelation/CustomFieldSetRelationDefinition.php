<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomFieldSetRelation;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityDefinition;
use TheCodeBunny\ShopwareApi\Data\Schema\PropertyCollection;
use TheCodeBunny\ShopwareApi\Data\Schema\FlagCollection;
use TheCodeBunny\ShopwareApi\Data\Schema\Property;
use TheCodeBunny\ShopwareApi\Data\Schema\Flag;
use TheCodeBunny\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetRelationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'custom_field_set_relation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomFieldSetRelationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomFieldSetRelationCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('custom_field_set_relation', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('customFieldSetId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('entityName', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('customFieldSet', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'custom_field_set', 'referenceField' => 'id', 'localField' => 'customFieldSetId', 'relation' => 'many_to_one', ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
