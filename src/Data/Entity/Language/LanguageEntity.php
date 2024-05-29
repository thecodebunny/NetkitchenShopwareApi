<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Language;

use Thecodebunny\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CategoryTranslation\CategoryTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CountryTranslation\CountryTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CurrencyTranslation\CurrencyTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\LocaleTranslation\LocaleTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MediaTranslation\MediaTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductTranslation\ProductTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\UnitTranslation\UnitTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalutationTranslation\SalutationTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PluginTranslation\PluginTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsPageTranslation\CmsPageTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsSlotTranslation\CmsSlotTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductSearchKeyword\ProductSearchKeywordCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PromotionTranslation\PromotionTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductReview\ProductReviewCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Thecodebunny\ShopwareApi\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\AppTranslation\AppTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductSearchConfig\ProductSearchConfigEntity;
use Thecodebunny\ShopwareApi\Data\Entity\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\TaxProviderTranslation\TaxProviderTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ThemeTranslation\ThemeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
