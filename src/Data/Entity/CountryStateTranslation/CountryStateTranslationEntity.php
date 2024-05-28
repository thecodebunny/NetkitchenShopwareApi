<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CountryStateTranslation;

use Netktichen\ShopwareApi\Data\Entity\CountryState\CountryStateEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryStateTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $countryStateId = null;

    public ?string $languageId = null;

    public ?CountryStateEntity $countryState = null;

    public ?LanguageEntity $language = null;
}
