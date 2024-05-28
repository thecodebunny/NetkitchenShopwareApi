<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SalesChannelDomain;

use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use Netktichen\ShopwareApi\Data\Entity\SnippetSet\SnippetSetEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductExport\ProductExportCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelDomainEntity extends Entity
{
    public ?string $url = null;

    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?string $currencyId = null;

    public ?string $snippetSetId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;

    public ?CurrencyEntity $currency = null;

    public ?SnippetSetEntity $snippetSet = null;

    public ?SalesChannelEntity $salesChannelDefaultHreflang = null;

    public ?ProductExportCollection $productExports = null;

    public ?bool $hreflangUseOnlyLocale = null;
}
