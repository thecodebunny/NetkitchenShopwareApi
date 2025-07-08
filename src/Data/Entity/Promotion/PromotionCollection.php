<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Promotion;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionEntity $entity)
 * @method void set(PromotionEntity $entity)
 * @method PromotionEntity[] getIterator()
 * @method PromotionEntity[] getElements()
 * @method PromotionEntity|null get(string $key)
 * @method PromotionEntity|null first()
 * @method PromotionEntity|null last()
 */
class PromotionCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PromotionEntity::class;
    }
}
