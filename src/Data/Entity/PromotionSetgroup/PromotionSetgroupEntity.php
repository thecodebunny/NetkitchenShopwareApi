<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PromotionSetgroup;

use Thecodebunny\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $packagerKey = null;

    public ?string $sorterKey = null;

    public ?float $value = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleCollection $setGroupRules = null;
}
