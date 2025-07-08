<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductFeatureSet;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductFeatureSetEntity $entity)
 * @method void set(ProductFeatureSetEntity $entity)
 * @method ProductFeatureSetEntity[] getIterator()
 * @method ProductFeatureSetEntity[] getElements()
 * @method ProductFeatureSetEntity|null get(string $key)
 * @method ProductFeatureSetEntity|null first()
 * @method ProductFeatureSetEntity|null last()
 */
class ProductFeatureSetCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductFeatureSetEntity::class;
    }
}
