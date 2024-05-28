<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CmsBlock;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CmsBlockEntity $entity)
 * @method void set(CmsBlockEntity $entity)
 * @method CmsBlockEntity[] getIterator()
 * @method CmsBlockEntity[] getElements()
 * @method CmsBlockEntity|null get(string $key)
 * @method CmsBlockEntity|null first()
 * @method CmsBlockEntity|null last()
 */
class CmsBlockCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CmsBlockEntity::class;
    }
}
