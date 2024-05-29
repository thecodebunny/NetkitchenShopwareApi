<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Language;

use TheCodeBunny\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CategoryTranslation\CategoryTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CountryTranslation\CountryTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CurrencyTranslation\CurrencyTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\LocaleTranslation\LocaleTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\MediaTranslation\MediaTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductTranslation\ProductTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\UnitTranslation\UnitTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalutationTranslation\SalutationTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PluginTranslation\PluginTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CmsPageTranslation\CmsPageTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CmsSlotTranslation\CmsSlotTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductSearchKeyword\ProductSearchKeywordCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PromotionTranslation\PromotionTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductReview\ProductReviewCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\AppTranslation\AppTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductSearchConfig\ProductSearchConfigEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\TaxProviderTranslation\TaxProviderTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ThemeTranslation\ThemeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
