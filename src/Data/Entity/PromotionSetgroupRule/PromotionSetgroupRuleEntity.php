<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PromotionSetgroupRule;

use TheCodeBunny\ShopwareApi\Data\Entity\PromotionSetgroup\PromotionSetgroupEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
