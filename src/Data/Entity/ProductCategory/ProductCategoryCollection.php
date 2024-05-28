<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductCategory;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductCategoryEntity $entity)
 * @method void set(ProductCategoryEntity $entity)
 * @method ProductCategoryEntity[] getIterator()
 * @method ProductCategoryEntity[] getElements()
 * @method ProductCategoryEntity|null get(string $key)
 * @method ProductCategoryEntity|null first()
 * @method ProductCategoryEntity|null last()
 */
class ProductCategoryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductCategoryEntity::class;
    }
}
