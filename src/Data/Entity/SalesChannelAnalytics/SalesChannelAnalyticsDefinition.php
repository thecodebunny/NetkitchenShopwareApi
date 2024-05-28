<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SalesChannelAnalytics;

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
class SalesChannelAnalyticsDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_analytics';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelAnalyticsEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelAnalyticsCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('sales_channel_analytics', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('trackingId', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('active', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('trackOrders', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('anonymizeIp', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('salesChannel', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'sales_channel', 'referenceField' => 'analyticsId', 'localField' => 'id', 'relation' => 'one_to_one', ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}