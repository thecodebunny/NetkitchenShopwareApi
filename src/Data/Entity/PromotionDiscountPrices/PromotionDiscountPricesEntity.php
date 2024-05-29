<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PromotionDiscountPrices;

use TheCodeBunny\ShopwareApi\Data\Entity\PromotionDiscount\PromotionDiscountEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountPricesEntity extends Entity
{
    public ?string $discountId = null;

    public ?string $currencyId = null;

    public ?float $price = null;

    public ?PromotionDiscountEntity $promotionDiscount = null;

    public ?CurrencyEntity $currency = null;
}
