<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PromotionSetgroupRule;

use Thecodebunny\ShopwareApi\Data\Entity\PromotionSetgroup\PromotionSetgroupEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
