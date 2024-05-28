<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\PromotionSetgroupRule;

use Netktichen\ShopwareApi\Data\Entity\PromotionSetgroup\PromotionSetgroupEntity;
use Netktichen\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupRuleEntity extends Entity
{
    public ?string $setgroupId = null;

    public ?string $ruleId = null;

    public ?PromotionSetgroupEntity $setgroup = null;

    public ?RuleEntity $rule = null;
}
