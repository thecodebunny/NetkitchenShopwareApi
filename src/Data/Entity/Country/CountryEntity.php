<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Country;

use TheCodeBunny\ShopwareApi\Data\Entity\CountryState\CountryStateCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CountryTranslation\CountryTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CustomerAddress\CustomerAddressCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\TaxRule\TaxRuleCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryEntity extends Entity
{
    public ?string $name = null;

    public ?string $iso = null;

    public ?int $position = null;

    public ?bool $active = null;

    public ?bool $shippingAvailable = null;

    public ?string $iso3 = null;

    public ?bool $displayStateInRegistration = null;

    public ?bool $forceStateInRegistration = null;

    public ?bool $checkVatIdPattern = null;

    public ?bool $vatIdRequired = null;

    public ?string $vatIdPattern = null;

    public ?array $customerTax = null;

    public ?array $companyTax = null;

    public ?bool $postalCodeRequired = null;

    public ?bool $checkPostalCodePattern = null;

    public ?bool $checkAdvancedPostalCodePattern = null;

    public ?string $advancedPostalCodePattern = null;

    public ?array $addressFormat = null;

    public ?string $defaultPostalCodePattern = null;

    public ?CountryStateCollection $states = null;

    public ?CountryTranslationCollection $translations = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?OrderAddressCollection $orderAddresses = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?TaxRuleCollection $taxRules = null;

    public ?CurrencyCountryRoundingCollection $currencyCountryRoundings = null;
}
