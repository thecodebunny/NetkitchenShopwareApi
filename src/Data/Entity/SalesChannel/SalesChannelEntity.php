<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannel;

use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Currency\CurrencyCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Country\CountryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelType\SalesChannelTypeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\CustomerGroup\CustomerGroupEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use Thecodebunny\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Thecodebunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SystemConfig\SystemConfigCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Category\CategoryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\ProductVisibility\ProductVisibilityCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainEntity;
use Thecodebunny\ShopwareApi\Data\Entity\MailHeaderFooter\MailHeaderFooterEntity;
use Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PromotionSalesChannel\PromotionSalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductReview\ProductReviewCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SeoUrlTemplate\SeoUrlTemplateCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MainCategory\MainCategoryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductExport\ProductExportCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelAnalytics\SalesChannelAnalyticsEntity;
use Thecodebunny\ShopwareApi\Data\Entity\CustomerGroup\CustomerGroupCollection;
use Thecodebunny\ShopwareApi\Data\Entity\LandingPage\LandingPageCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CustomerWishlist\CustomerWishlistCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Theme\ThemeCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
