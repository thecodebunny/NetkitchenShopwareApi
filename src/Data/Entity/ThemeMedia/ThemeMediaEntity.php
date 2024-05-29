<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ThemeMedia;

use Thecodebunny\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
