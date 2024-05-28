<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomerTag;

use Netktichen\ShopwareApi\Data\Entity\EntityDefinition;
use Netktichen\ShopwareApi\Data\Schema\PropertyCollection;
use Netktichen\ShopwareApi\Data\Schema\FlagCollection;
use Netktichen\ShopwareApi\Data\Schema\Property;
use Netktichen\ShopwareApi\Data\Schema\Flag;
use Netktichen\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerTagCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('customer_tag', new PropertyCollection([
            new Property('customerId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('tagId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('customer', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'customer', 'referenceField' => 'id', 'localField' => 'customerId', 'relation' => 'many_to_one', ]),
            new Property('tag', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), ['entity' => 'tag', 'referenceField' => 'id', 'localField' => 'tagId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
