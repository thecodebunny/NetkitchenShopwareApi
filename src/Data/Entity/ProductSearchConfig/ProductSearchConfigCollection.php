<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductSearchConfig;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductSearchConfigEntity $entity)
 * @method void set(ProductSearchConfigEntity $entity)
 * @method ProductSearchConfigEntity[] getIterator()
 * @method ProductSearchConfigEntity[] getElements()
 * @method ProductSearchConfigEntity|null get(string $key)
 * @method ProductSearchConfigEntity|null first()
 * @method ProductSearchConfigEntity|null last()
 */
class ProductSearchConfigCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductSearchConfigEntity::class;
    }
}
