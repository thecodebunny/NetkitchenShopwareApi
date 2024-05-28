<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Language;

use Netktichen\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Netktichen\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderCollection;
use Netktichen\ShopwareApi\Data\Entity\CategoryTranslation\CategoryTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\CountryTranslation\CountryTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\CurrencyTranslation\CurrencyTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\LocaleTranslation\LocaleTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\MediaTranslation\MediaTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductTranslation\ProductTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\UnitTranslation\UnitTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\SalutationTranslation\SalutationTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\PluginTranslation\PluginTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\CmsPageTranslation\CmsPageTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\CmsSlotTranslation\CmsSlotTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductSearchKeyword\ProductSearchKeywordCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use Netktichen\ShopwareApi\Data\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\PromotionTranslation\PromotionTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductReview\ProductReviewCollection;
use Netktichen\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Netktichen\ShopwareApi\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\AppTranslation\AppTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductSearchConfig\ProductSearchConfigEntity;
use Netktichen\ShopwareApi\Data\Entity\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\TaxProviderTranslation\TaxProviderTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ThemeTranslation\ThemeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LanguageEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $localeId = null;

    public ?string $translationCodeId = null;

    public ?string $name = null;

    public ?LanguageEntity $parent = null;

    public ?LocaleEntity $locale = null;

    public ?LocaleEntity $translationCode = null;

    public ?LanguageCollection $children = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;

    public ?CustomerCollection $customers = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?OrderCollection $orders = null;

    public ?CategoryTranslationCollection $categoryTranslations = null;

    public ?CountryStateTranslationCollection $countryStateTranslations = null;

    public ?CountryTranslationCollection $countryTranslations = null;

    public ?CurrencyTranslationCollection $currencyTranslations = null;

    public ?CustomerGroupTranslationCollection $customerGroupTranslations = null;

    public ?LocaleTranslationCollection $localeTranslations = null;

    public ?MediaTranslationCollection $mediaTranslations = null;

    public ?PaymentMethodTranslationCollection $paymentMethodTranslations = null;

    public ?ProductManufacturerTranslationCollection $productManufacturerTranslations = null;

    public ?ProductTranslationCollection $productTranslations = null;

    public ?ShippingMethodTranslationCollection $shippingMethodTranslations = null;

    public ?UnitTranslationCollection $unitTranslations = null;

    public ?PropertyGroupTranslationCollection $propertyGroupTranslations = null;

    public ?PropertyGroupOptionTranslationCollection $propertyGroupOptionTranslations = null;

    public ?SalesChannelTranslationCollection $salesChannelTranslations = null;

    public ?SalesChannelTypeTranslationCollection $salesChannelTypeTranslations = null;

    public ?SalutationTranslationCollection $salutationTranslations = null;

    public ?PluginTranslationCollection $pluginTranslations = null;

    public ?ProductStreamTranslationCollection $productStreamTranslations = null;

    public ?StateMachineTranslationCollection $stateMachineTranslations = null;

    public ?StateMachineStateTranslationCollection $stateMachineStateTranslations = null;

    public ?CmsPageTranslationCollection $cmsPageTranslations = null;

    public ?CmsSlotTranslationCollection $cmsSlotTranslations = null;

    public ?MailTemplateTranslationCollection $mailTemplateTranslations = null;

    public ?MailHeaderFooterTranslationCollection $mailHeaderFooterTranslations = null;

    public ?DocumentTypeTranslationCollection $documentTypeTranslations = null;

    public ?NumberRangeTypeTranslationCollection $numberRangeTypeTranslations = null;

    public ?DeliveryTimeTranslationCollection $deliveryTimeTranslations = null;

    public ?ProductSearchKeywordCollection $productSearchKeywords = null;

    public ?ProductKeywordDictionaryCollection $productKeywordDictionaries = null;

    public ?MailTemplateTypeTranslationCollection $mailTemplateTypeTranslations = null;

    public ?PromotionTranslationCollection $promotionTranslations = null;

    public ?NumberRangeTranslationCollection $numberRangeTranslations = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?SeoUrlCollection $seoUrlTranslations = null;

    public ?TaxRuleTypeTranslationCollection $taxRuleTypeTranslations = null;

    public ?ProductCrossSellingTranslationCollection $productCrossSellingTranslations = null;

    public ?ImportExportProfileTranslationCollection $importExportProfileTranslations = null;

    public ?ProductSortingTranslationCollection $productSortingTranslations = null;

    public ?ProductFeatureSetTranslationCollection $productFeatureSetTranslations = null;

    public ?AppTranslationCollection $appTranslations = null;

    public ?AppActionButtonTranslationCollection $actionButtonTranslations = null;

    public ?LandingPageTranslationCollection $landingPageTranslations = null;

    public ?AppCmsBlockTranslationCollection $appCmsBlockTranslations = null;

    public ?AppScriptConditionTranslationCollection $appScriptConditionTranslations = null;

    public ?ProductSearchConfigEntity $productSearchConfig = null;

    public ?AppFlowActionTranslationCollection $appFlowActionTranslations = null;

    public ?TaxProviderTranslationCollection $taxProviderTranslations = null;

    public ?ThemeTranslationCollection $themeTranslations = null;
}
