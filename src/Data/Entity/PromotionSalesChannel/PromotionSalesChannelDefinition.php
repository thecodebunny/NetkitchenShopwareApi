<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PromotionSalesChannel;

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
class PromotionSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionSalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionSalesChannelCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('promotion_sales_channel', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('promotionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('salesChannelId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('priority', 'int', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('promotion', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'promotion', 'referenceField' => 'id', 'localField' => 'promotionId', 'relation' => 'many_to_one', ]),
            new Property('salesChannel', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'sales_channel', 'referenceField' => 'id', 'localField' => 'salesChannelId', 'relation' => 'many_to_one', ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
