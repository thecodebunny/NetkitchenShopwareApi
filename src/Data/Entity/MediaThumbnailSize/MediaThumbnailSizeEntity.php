<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MediaThumbnailSize;

use Thecodebunny\ShopwareApi\Data\Entity\MediaFolderConfiguration\MediaFolderConfigurationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailSizeEntity extends Entity
{
    public ?int $width = null;

    public ?int $height = null;

    public ?MediaFolderConfigurationCollection $mediaFolderConfigurations = null;
}
