<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductKeywordDictionary;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductKeywordDictionaryEntity $entity)
 * @method void set(ProductKeywordDictionaryEntity $entity)
 * @method ProductKeywordDictionaryEntity[] getIterator()
 * @method ProductKeywordDictionaryEntity[] getElements()
 * @method ProductKeywordDictionaryEntity|null get(string $key)
 * @method ProductKeywordDictionaryEntity|null first()
 * @method ProductKeywordDictionaryEntity|null last()
 */
class ProductKeywordDictionaryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductKeywordDictionaryEntity::class;
    }
}
