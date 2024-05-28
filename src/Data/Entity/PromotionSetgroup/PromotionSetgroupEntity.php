<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\PromotionSetgroup;

use Netktichen\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Netktichen\ShopwareApi\Data\Entity\Rule\RuleCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
