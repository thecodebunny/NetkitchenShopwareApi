<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaDefaultFolder;

use TheCodeBunny\ShopwareApi\Data\Entity\MediaFolder\MediaFolderEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaDefaultFolderEntity extends Entity
{
    public ?array $associationFields = null;

    public ?string $entity = null;

    public ?MediaFolderEntity $folder = null;
}
