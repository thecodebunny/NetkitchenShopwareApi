<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CountryStateTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\CountryState\CountryStateEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
