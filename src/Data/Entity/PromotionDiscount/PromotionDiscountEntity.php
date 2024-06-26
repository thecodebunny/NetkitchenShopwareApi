<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PromotionDiscount;

use Thecodebunny\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $scope = null;

    public ?string $type = null;

    public ?float $value = null;

    public ?bool $considerAdvancedRules = null;

    public ?float $maxValue = null;

    public ?string $sorterKey = null;

    public ?string $applierKey = null;

    public ?string $usageKey = null;

    public ?string $pickerKey = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleCollection $discountRules = null;

    public ?PromotionDiscountPricesCollection $promotionDiscountPrices = null;
}
