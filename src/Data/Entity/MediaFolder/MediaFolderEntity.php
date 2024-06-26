<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MediaFolder;

use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MediaDefaultFolder\MediaDefaultFolderEntity;
use Thecodebunny\ShopwareApi\Data\Entity\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
