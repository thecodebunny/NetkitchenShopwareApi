<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SalesChannel;

use Netktichen\ShopwareApi\Data\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Currency\CurrencyCollection;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageCollection;
use Netktichen\ShopwareApi\Data\Entity\Country\CountryCollection;
use Netktichen\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelType\SalesChannelTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\CustomerGroup\CustomerGroupEntity;
use Netktichen\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use Netktichen\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\Country\CountryEntity;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderCollection;
use Netktichen\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Netktichen\ShopwareApi\Data\Entity\SystemConfig\SystemConfigCollection;
use Netktichen\ShopwareApi\Data\Entity\Category\CategoryEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductVisibility\ProductVisibilityCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainEntity;
use Netktichen\ShopwareApi\Data\Entity\MailHeaderFooter\MailHeaderFooterEntity;
use Netktichen\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\PromotionSalesChannel\PromotionSalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductReview\ProductReviewCollection;
use Netktichen\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Netktichen\ShopwareApi\Data\Entity\SeoUrlTemplate\SeoUrlTemplateCollection;
use Netktichen\ShopwareApi\Data\Entity\MainCategory\MainCategoryCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductExport\ProductExportCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelAnalytics\SalesChannelAnalyticsEntity;
use Netktichen\ShopwareApi\Data\Entity\CustomerGroup\CustomerGroupCollection;
use Netktichen\ShopwareApi\Data\Entity\LandingPage\LandingPageCollection;
use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Netktichen\ShopwareApi\Data\Entity\CustomerWishlist\CustomerWishlistCollection;
use Netktichen\ShopwareApi\Data\Entity\Theme\ThemeCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelEntity extends Entity
{
    public ?string $typeId = null;

    public ?string $languageId = null;

    public ?string $customerGroupId = null;

    public ?string $currencyId = null;

    public ?string $paymentMethodId = null;

    public ?string $shippingMethodId = null;

    public ?string $countryId = null;

    public ?string $analyticsId = null;

    public ?string $navigationCategoryId = null;

    public ?string $navigationCategoryVersionId = null;

    public ?int $navigationCategoryDepth = null;

    public ?string $footerCategoryId = null;

    public ?string $footerCategoryVersionId = null;

    public ?string $serviceCategoryId = null;

    public ?string $serviceCategoryVersionId = null;

    public ?string $mailHeaderFooterId = null;

    public ?string $hreflangDefaultDomainId = null;

    public ?string $name = null;

    public ?string $shortName = null;

    public ?string $taxCalculationType = null;

    public ?string $accessKey = null;

    public ?array $configuration = null;

    public ?bool $active = null;

    public ?bool $hreflangActive = null;

    public ?bool $maintenance = null;

    public ?array $maintenanceIpWhitelist = null;

    public ?SalesChannelTranslationCollection $translations = null;

    public ?CurrencyCollection $currencies = null;

    public ?LanguageCollection $languages = null;

    public ?CountryCollection $countries = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?array $paymentMethodIds = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?SalesChannelTypeEntity $type = null;

    public ?LanguageEntity $language = null;

    public ?CustomerGroupEntity $customerGroup = null;

    public ?CurrencyEntity $currency = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?CountryEntity $country = null;

    public ?OrderCollection $orders = null;

    public ?CustomerCollection $customers = null;

    public ?string $homeCmsPageId = null;

    public ?string $homeCmsPageVersionId = null;

    public ?CmsPageEntity $homeCmsPage = null;

    public ?array $homeSlotConfig = null;

    public ?bool $homeEnabled = null;

    public ?string $homeName = null;

    public ?string $homeMetaTitle = null;

    public ?string $homeMetaDescription = null;

    public ?string $homeKeywords = null;

    public ?SalesChannelDomainCollection $domains = null;

    public ?SystemConfigCollection $systemConfigs = null;

    public ?CategoryEntity $navigationCategory = null;

    public ?CategoryEntity $footerCategory = null;

    public ?CategoryEntity $serviceCategory = null;

    public ?ProductVisibilityCollection $productVisibilities = null;

    public ?SalesChannelDomainEntity $hreflangDefaultDomain = null;

    public ?MailHeaderFooterEntity $mailHeaderFooter = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?PromotionSalesChannelCollection $promotionSalesChannels = null;

    public ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?SeoUrlTemplateCollection $seoUrlTemplates = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?ProductExportCollection $productExports = null;

    public ?SalesChannelAnalyticsEntity $analytics = null;

    public ?CustomerGroupCollection $customerGroupsRegistrations = null;

    public ?LandingPageCollection $landingPages = null;

    public ?CustomerCollection $boundCustomers = null;

    public ?CustomerWishlistCollection $wishlists = null;

    public ?ThemeCollection $themes = null;
}
