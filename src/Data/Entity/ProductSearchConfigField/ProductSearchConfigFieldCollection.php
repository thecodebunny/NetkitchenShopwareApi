<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductSearchConfigField;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductSearchConfigFieldEntity $entity)
 * @method void set(ProductSearchConfigFieldEntity $entity)
 * @method ProductSearchConfigFieldEntity[] getIterator()
 * @method ProductSearchConfigFieldEntity[] getElements()
 * @method ProductSearchConfigFieldEntity|null get(string $key)
 * @method ProductSearchConfigFieldEntity|null first()
 * @method ProductSearchConfigFieldEntity|null last()
 */
class ProductSearchConfigFieldCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductSearchConfigFieldEntity::class;
    }
}
