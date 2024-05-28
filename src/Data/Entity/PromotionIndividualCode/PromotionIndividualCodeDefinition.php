<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\PromotionIndividualCode;

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
class PromotionIndividualCodeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_individual_code';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionIndividualCodeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionIndividualCodeCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('promotion_individual_code', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('promotionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('code', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('payload', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('promotion', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'promotion', 'referenceField' => 'id', 'localField' => 'promotionId', 'relation' => 'many_to_one', ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
