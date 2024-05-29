<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Theme;

use TheCodeBunny\ShopwareApi\Data\Entity\ThemeTranslation\ThemeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeEntity extends Entity
{
    public ?string $technicalName = null;

    public ?string $name = null;

    public ?string $author = null;

    public ?string $description = null;

    public ?array $labels = null;

    public ?array $helpTexts = null;

    public ?string $previewMediaId = null;

    public ?string $parentThemeId = null;

    public ?array $baseConfig = null;

    public ?array $configValues = null;

    public ?bool $active = null;

    public ?ThemeTranslationCollection $translations = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?MediaCollection $media = null;

    public ?MediaEntity $previewMedia = null;

    public ?ThemeCollection $dependentThemes = null;
}
