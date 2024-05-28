<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\PromotionCartRule;

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
class PromotionCartRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_cart_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionCartRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionCartRuleCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('promotion_cart_rule', new PropertyCollection([
            new Property('promotionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('ruleId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('promotion', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'promotion', 'referenceField' => 'id', 'localField' => 'promotionId', 'relation' => 'many_to_one', ]),
            new Property('rule', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'rule', 'referenceField' => 'id', 'localField' => 'ruleId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
