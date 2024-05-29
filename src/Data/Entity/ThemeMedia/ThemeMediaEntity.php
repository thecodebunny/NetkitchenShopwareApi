<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ThemeMedia;

use TheCodeBunny\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeMediaEntity extends Entity
{
    public ?string $themeId = null;

    public ?string $mediaId = null;

    public ?ThemeEntity $theme = null;

    public ?MediaEntity $media = null;
}
