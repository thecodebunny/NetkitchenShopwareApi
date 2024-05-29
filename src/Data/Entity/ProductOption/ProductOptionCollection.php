<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductOption;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductOptionEntity $entity)
 * @method void set(ProductOptionEntity $entity)
 * @method ProductOptionEntity[] getIterator()
 * @method ProductOptionEntity[] getElements()
 * @method ProductOptionEntity|null get(string $key)
 * @method ProductOptionEntity|null first()
 * @method ProductOptionEntity|null last()
 */
class ProductOptionCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductOptionEntity::class;
    }
}
