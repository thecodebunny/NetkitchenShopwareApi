<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductStreamTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductStreamTranslationEntity $entity)
 * @method void set(ProductStreamTranslationEntity $entity)
 * @method ProductStreamTranslationEntity[] getIterator()
 * @method ProductStreamTranslationEntity[] getElements()
 * @method ProductStreamTranslationEntity|null get(string $key)
 * @method ProductStreamTranslationEntity|null first()
 * @method ProductStreamTranslationEntity|null last()
 */
class ProductStreamTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductStreamTranslationEntity::class;
    }
}
