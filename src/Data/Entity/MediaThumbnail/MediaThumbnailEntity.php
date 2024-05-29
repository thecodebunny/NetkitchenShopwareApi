<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaThumbnail;

use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailEntity extends Entity
{
    public ?string $mediaId = null;

    public ?int $width = null;

    public ?int $height = null;

    public ?string $url = null;

    public ?MediaEntity $media = null;
}
