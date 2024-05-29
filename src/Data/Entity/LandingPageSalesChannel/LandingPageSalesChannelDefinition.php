<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LandingPageSalesChannel;

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
class LandingPageSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'landing_page_sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LandingPageSalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LandingPageSalesChannelCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('landing_page_sales_channel', new PropertyCollection([
            new Property('landingPageId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('landingPageVersionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('salesChannelId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('landingPage', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'landing_page', 'referenceField' => 'id', 'localField' => 'landingPageId', 'relation' => 'many_to_one', ]),
            new Property('salesChannel', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'sales_channel', 'referenceField' => 'id', 'localField' => 'salesChannelId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
