<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CurrencyCountryRounding;

use TheCodeBunny\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyCountryRoundingEntity extends Entity
{
    public ?string $currencyId = null;

    public ?string $countryId = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;

    public ?CurrencyEntity $currency = null;

    public ?CountryEntity $country = null;
}
