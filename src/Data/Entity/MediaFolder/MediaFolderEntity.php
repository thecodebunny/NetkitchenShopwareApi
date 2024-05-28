<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MediaFolder;

use Netktichen\ShopwareApi\Data\Entity\Media\MediaCollection;
use Netktichen\ShopwareApi\Data\Entity\MediaDefaultFolder\MediaDefaultFolderEntity;
use Netktichen\ShopwareApi\Data\Entity\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderEntity extends Entity
{
    public ?bool $useParentConfiguration = null;

    public ?string $configurationId = null;

    public ?string $defaultFolderId = null;

    public ?string $parentId = null;

    public ?MediaFolderEntity $parent = null;

    public ?MediaFolderCollection $children = null;

    public ?int $childCount = null;

    public ?string $path = null;

    public ?MediaCollection $media = null;

    public ?MediaDefaultFolderEntity $defaultFolder = null;

    public ?MediaFolderConfigurationEntity $configuration = null;

    public ?string $name = null;
}
