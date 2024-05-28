<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MediaThumbnail;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaThumbnailEntity $entity)
 * @method void set(MediaThumbnailEntity $entity)
 * @method MediaThumbnailEntity[] getIterator()
 * @method MediaThumbnailEntity[] getElements()
 * @method MediaThumbnailEntity|null get(string $key)
 * @method MediaThumbnailEntity|null first()
 * @method MediaThumbnailEntity|null last()
 */
class MediaThumbnailCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MediaThumbnailEntity::class;
    }
}
