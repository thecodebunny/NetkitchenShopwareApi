<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductTag;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductTagEntity $entity)
 * @method void set(ProductTagEntity $entity)
 * @method ProductTagEntity[] getIterator()
 * @method ProductTagEntity[] getElements()
 * @method ProductTagEntity|null get(string $key)
 * @method ProductTagEntity|null first()
 * @method ProductTagEntity|null last()
 */
class ProductTagCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductTagEntity::class;
    }
}
