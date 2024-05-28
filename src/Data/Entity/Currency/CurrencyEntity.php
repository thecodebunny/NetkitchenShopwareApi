<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Currency;

use Netktichen\ShopwareApi\Data\Entity\CurrencyTranslation\CurrencyTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Netktichen\ShopwareApi\Data\Entity\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductExport\ProductExportCollection;
use Netktichen\ShopwareApi\Data\Entity\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyEntity extends Entity
{
    public ?float $factor = null;

    public ?string $symbol = null;

    public ?string $isoCode = null;

    public ?string $shortName = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?bool $isSystemDefault = null;

    public ?float $taxFreeFrom = null;

    public ?CurrencyTranslationCollection $translations = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?OrderCollection $orders = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;

    public ?PromotionDiscountPricesCollection $promotionDiscountPrices = null;

    public ?ProductExportCollection $productExports = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;

    public ?CurrencyCountryRoundingCollection $countryRoundings = null;
}
