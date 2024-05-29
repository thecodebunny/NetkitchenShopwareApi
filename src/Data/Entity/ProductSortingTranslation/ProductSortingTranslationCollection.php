<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductSortingTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductSortingTranslationEntity $entity)
 * @method void set(ProductSortingTranslationEntity $entity)
 * @method ProductSortingTranslationEntity[] getIterator()
 * @method ProductSortingTranslationEntity[] getElements()
 * @method ProductSortingTranslationEntity|null get(string $key)
 * @method ProductSortingTranslationEntity|null first()
 * @method ProductSortingTranslationEntity|null last()
 */
class ProductSortingTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductSortingTranslationEntity::class;
    }
}
