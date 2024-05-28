<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ThemeTranslation;

use Netktichen\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
