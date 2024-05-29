<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PromotionDiscountPrices;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionDiscountPricesEntity $entity)
 * @method void set(PromotionDiscountPricesEntity $entity)
 * @method PromotionDiscountPricesEntity[] getIterator()
 * @method PromotionDiscountPricesEntity[] getElements()
 * @method PromotionDiscountPricesEntity|null get(string $key)
 * @method PromotionDiscountPricesEntity|null first()
 * @method PromotionDiscountPricesEntity|null last()
 */
class PromotionDiscountPricesCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PromotionDiscountPricesEntity::class;
    }
}
