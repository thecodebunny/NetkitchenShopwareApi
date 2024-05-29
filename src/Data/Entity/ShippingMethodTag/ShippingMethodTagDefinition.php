<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ShippingMethodTag;

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
class ShippingMethodTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'shipping_method_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ShippingMethodTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ShippingMethodTagCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('shipping_method_tag', new PropertyCollection([
            new Property('shippingMethodId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('tagId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('shippingMethod', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'shipping_method', 'referenceField' => 'id', 'localField' => 'shippingMethodId', 'relation' => 'many_to_one', ]),
            new Property('tag', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'tag', 'referenceField' => 'id', 'localField' => 'tagId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
