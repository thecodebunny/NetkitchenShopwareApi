<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Theme;

use Thecodebunny\ShopwareApi\Data\Entity\ThemeTranslation\ThemeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
