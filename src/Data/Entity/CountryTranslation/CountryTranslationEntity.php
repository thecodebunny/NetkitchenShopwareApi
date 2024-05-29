<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CountryTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
