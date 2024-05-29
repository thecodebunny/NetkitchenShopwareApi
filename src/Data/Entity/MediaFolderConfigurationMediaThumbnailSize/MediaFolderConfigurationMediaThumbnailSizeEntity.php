<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaFolderConfigurationMediaThumbnailSize;

use TheCodeBunny\ShopwareApi\Data\Entity\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\MediaThumbnailSize\MediaThumbnailSizeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationMediaThumbnailSizeEntity extends Entity
{
    public ?string $mediaFolderConfigurationId = null;

    public ?string $mediaThumbnailSizeId = null;

    public ?MediaFolderConfigurationEntity $mediaFolderConfiguration = null;

    public ?MediaThumbnailSizeEntity $mediaThumbnailSize = null;
}
