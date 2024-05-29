<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductPrice;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductPriceEntity $entity)
 * @method void set(ProductPriceEntity $entity)
 * @method ProductPriceEntity[] getIterator()
 * @method ProductPriceEntity[] getElements()
 * @method ProductPriceEntity|null get(string $key)
 * @method ProductPriceEntity|null first()
 * @method ProductPriceEntity|null last()
 */
class ProductPriceCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductPriceEntity::class;
    }
}
