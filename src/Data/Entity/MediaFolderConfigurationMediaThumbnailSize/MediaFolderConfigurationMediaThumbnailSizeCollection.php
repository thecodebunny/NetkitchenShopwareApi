<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaFolderConfigurationMediaThumbnailSize;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaFolderConfigurationMediaThumbnailSizeEntity $entity)
 * @method void set(MediaFolderConfigurationMediaThumbnailSizeEntity $entity)
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity[] getIterator()
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity[] getElements()
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity|null get(string $key)
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity|null first()
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity|null last()
 */
class MediaFolderConfigurationMediaThumbnailSizeCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MediaFolderConfigurationMediaThumbnailSizeEntity::class;
    }
}
