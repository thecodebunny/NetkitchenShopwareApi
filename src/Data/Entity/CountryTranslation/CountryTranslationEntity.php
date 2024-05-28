<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CountryTranslation;

use Netktichen\ShopwareApi\Data\Entity\Country\CountryEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
