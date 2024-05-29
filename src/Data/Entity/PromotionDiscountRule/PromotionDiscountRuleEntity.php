<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PromotionDiscountRule;

use TheCodeBunny\ShopwareApi\Data\Entity\PromotionDiscount\PromotionDiscountEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountRuleEntity extends Entity
{
    public ?string $discountId = null;

    public ?string $ruleId = null;

    public ?PromotionDiscountEntity $discount = null;

    public ?RuleEntity $rule = null;
}
