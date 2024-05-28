<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\LocaleTranslation;

use Netktichen\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
