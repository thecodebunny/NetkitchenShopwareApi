<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PromotionTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionTranslationEntity $entity)
 * @method void set(PromotionTranslationEntity $entity)
 * @method PromotionTranslationEntity[] getIterator()
 * @method PromotionTranslationEntity[] getElements()
 * @method PromotionTranslationEntity|null get(string $key)
 * @method PromotionTranslationEntity|null first()
 * @method PromotionTranslationEntity|null last()
 */
class PromotionTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PromotionTranslationEntity::class;
    }
}
