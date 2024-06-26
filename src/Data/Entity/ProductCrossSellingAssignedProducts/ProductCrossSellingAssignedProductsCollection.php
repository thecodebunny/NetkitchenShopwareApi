<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductCrossSellingAssignedProducts;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductCrossSellingAssignedProductsEntity $entity)
 * @method void set(ProductCrossSellingAssignedProductsEntity $entity)
 * @method ProductCrossSellingAssignedProductsEntity[] getIterator()
 * @method ProductCrossSellingAssignedProductsEntity[] getElements()
 * @method ProductCrossSellingAssignedProductsEntity|null get(string $key)
 * @method ProductCrossSellingAssignedProductsEntity|null first()
 * @method ProductCrossSellingAssignedProductsEntity|null last()
 */
class ProductCrossSellingAssignedProductsCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductCrossSellingAssignedProductsEntity::class;
    }
}
