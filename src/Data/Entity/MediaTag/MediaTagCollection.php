<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MediaTag;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaTagEntity $entity)
 * @method void set(MediaTagEntity $entity)
 * @method MediaTagEntity[] getIterator()
 * @method MediaTagEntity[] getElements()
 * @method MediaTagEntity|null get(string $key)
 * @method MediaTagEntity|null first()
 * @method MediaTagEntity|null last()
 */
class MediaTagCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MediaTagEntity::class;
    }
}
