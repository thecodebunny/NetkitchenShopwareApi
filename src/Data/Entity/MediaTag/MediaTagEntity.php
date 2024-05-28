<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MediaTag;

use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
