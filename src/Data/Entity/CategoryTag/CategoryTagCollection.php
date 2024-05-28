<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CategoryTag;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CategoryTagEntity $entity)
 * @method void set(CategoryTagEntity $entity)
 * @method CategoryTagEntity[] getIterator()
 * @method CategoryTagEntity[] getElements()
 * @method CategoryTagEntity|null get(string $key)
 * @method CategoryTagEntity|null first()
 * @method CategoryTagEntity|null last()
 */
class CategoryTagCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CategoryTagEntity::class;
    }
}
