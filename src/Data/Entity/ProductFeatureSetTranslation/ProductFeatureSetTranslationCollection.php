<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductFeatureSetTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductFeatureSetTranslationEntity $entity)
 * @method void set(ProductFeatureSetTranslationEntity $entity)
 * @method ProductFeatureSetTranslationEntity[] getIterator()
 * @method ProductFeatureSetTranslationEntity[] getElements()
 * @method ProductFeatureSetTranslationEntity|null get(string $key)
 * @method ProductFeatureSetTranslationEntity|null first()
 * @method ProductFeatureSetTranslationEntity|null last()
 */
class ProductFeatureSetTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductFeatureSetTranslationEntity::class;
    }
}
