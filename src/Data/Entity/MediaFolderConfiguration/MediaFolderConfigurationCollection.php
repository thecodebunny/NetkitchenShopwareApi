<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaFolderConfiguration;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaFolderConfigurationEntity $entity)
 * @method void set(MediaFolderConfigurationEntity $entity)
 * @method MediaFolderConfigurationEntity[] getIterator()
 * @method MediaFolderConfigurationEntity[] getElements()
 * @method MediaFolderConfigurationEntity|null get(string $key)
 * @method MediaFolderConfigurationEntity|null first()
 * @method MediaFolderConfigurationEntity|null last()
 */
class MediaFolderConfigurationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MediaFolderConfigurationEntity::class;
    }
}
