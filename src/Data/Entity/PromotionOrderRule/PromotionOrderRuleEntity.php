<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PromotionOrderRule;

use Thecodebunny\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionOrderRuleEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $ruleId = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleEntity $rule = null;
}
