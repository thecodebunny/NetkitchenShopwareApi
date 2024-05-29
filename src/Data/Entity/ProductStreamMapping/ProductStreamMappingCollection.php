<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductStreamMapping;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductStreamMappingEntity $entity)
 * @method void set(ProductStreamMappingEntity $entity)
 * @method ProductStreamMappingEntity[] getIterator()
 * @method ProductStreamMappingEntity[] getElements()
 * @method ProductStreamMappingEntity|null get(string $key)
 * @method ProductStreamMappingEntity|null first()
 * @method ProductStreamMappingEntity|null last()
 */
class ProductStreamMappingCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductStreamMappingEntity::class;
    }
}
