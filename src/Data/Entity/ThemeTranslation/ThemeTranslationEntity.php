<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ThemeTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?array $labels = null;

    public ?array $helpTexts = null;

    public ?string $themeId = null;

    public ?string $languageId = null;

    public ?ThemeEntity $theme = null;

    public ?LanguageEntity $language = null;
}
