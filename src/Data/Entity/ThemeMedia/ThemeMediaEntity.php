<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ThemeMedia;

use Netktichen\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
