<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductCrossSellingTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductCrossSellingTranslationEntity $entity)
 * @method void set(ProductCrossSellingTranslationEntity $entity)
 * @method ProductCrossSellingTranslationEntity[] getIterator()
 * @method ProductCrossSellingTranslationEntity[] getElements()
 * @method ProductCrossSellingTranslationEntity|null get(string $key)
 * @method ProductCrossSellingTranslationEntity|null first()
 * @method ProductCrossSellingTranslationEntity|null last()
 */
class ProductCrossSellingTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductCrossSellingTranslationEntity::class;
    }
}
