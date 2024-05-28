<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MediaFolderConfiguration;

use Netktichen\ShopwareApi\Data\Entity\MediaFolder\MediaFolderCollection;
use Netktichen\ShopwareApi\Data\Entity\MediaThumbnailSize\MediaThumbnailSizeCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationEntity extends Entity
{
    public ?bool $createThumbnails = null;

    public ?bool $keepAspectRatio = null;

    public ?int $thumbnailQuality = null;

    public ?bool $private = null;

    public ?bool $noAssociation = null;

    public ?MediaFolderCollection $mediaFolders = null;

    public ?MediaThumbnailSizeCollection $mediaThumbnailSizes = null;

    public ?string $mediaThumbnailSizesRo = null;
}