<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductExport;

use Netktichen\ShopwareApi\Data\Entity\ProductStream\ProductStreamEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainEntity;
use Netktichen\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductExportEntity extends Entity
{
    public ?string $productStreamId = null;

    public ?string $storefrontSalesChannelId = null;

    public ?string $salesChannelId = null;

    public ?string $salesChannelDomainId = null;

    public ?string $currencyId = null;

    public ?string $fileName = null;

    public ?string $accessKey = null;

    public ?string $encoding = null;

    public ?string $fileFormat = null;

    public ?bool $includeVariants = null;

    public ?bool $generateByCronjob = null;

    public ?\DateTimeInterface$generatedAt = null;

    public ?int $interval = null;

    public ?string $headerTemplate = null;

    public ?string $bodyTemplate = null;

    public ?string $footerTemplate = null;

    public ?bool $pausedSchedule = null;

    public ?bool $isRunning = null;

    public ?ProductStreamEntity $productStream = null;

    public ?SalesChannelEntity $storefrontSalesChannel = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?SalesChannelDomainEntity $salesChannelDomain = null;

    public ?CurrencyEntity $currency = null;
}
