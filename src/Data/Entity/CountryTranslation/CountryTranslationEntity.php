<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CountryTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?array $addressFormat = null;

    public ?string $countryId = null;

    public ?string $languageId = null;

    public ?CountryEntity $country = null;

    public ?LanguageEntity $language = null;
}
