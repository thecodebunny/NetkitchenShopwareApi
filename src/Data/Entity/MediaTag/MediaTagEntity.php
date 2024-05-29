<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaTag;

use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTagEntity extends Entity
{
    public ?string $mediaId = null;

    public ?string $tagId = null;

    public ?MediaEntity $media = null;

    public ?TagEntity $tag = null;
}
