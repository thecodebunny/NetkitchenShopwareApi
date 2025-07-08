<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Country;

use Thecodebunny\ShopwareApi\Data\Entity\CountryState\CountryStateCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CountryTranslation\CountryTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CustomerAddress\CustomerAddressCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\TaxRule\TaxRuleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
