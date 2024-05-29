<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\LocaleTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $territory = null;

    public ?string $localeId = null;

    public ?string $languageId = null;

    public ?LocaleEntity $locale = null;

    public ?LanguageEntity $language = null;
}
