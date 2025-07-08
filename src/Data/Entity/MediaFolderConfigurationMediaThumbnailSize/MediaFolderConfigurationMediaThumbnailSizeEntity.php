<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MediaFolderConfigurationMediaThumbnailSize;

use Thecodebunny\ShopwareApi\Data\Entity\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Thecodebunny\ShopwareApi\Data\Entity\MediaThumbnailSize\MediaThumbnailSizeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
