<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaDefaultFolder;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaDefaultFolderEntity $entity)
 * @method void set(MediaDefaultFolderEntity $entity)
 * @method MediaDefaultFolderEntity[] getIterator()
 * @method MediaDefaultFolderEntity[] getElements()
 * @method MediaDefaultFolderEntity|null get(string $key)
 * @method MediaDefaultFolderEntity|null first()
 * @method MediaDefaultFolderEntity|null last()
 */
class MediaDefaultFolderCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MediaDefaultFolderEntity::class;
    }
}
