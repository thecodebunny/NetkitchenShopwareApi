<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroupTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PropertyGroupTranslationEntity $entity)
 * @method void set(PropertyGroupTranslationEntity $entity)
 * @method PropertyGroupTranslationEntity[] getIterator()
 * @method PropertyGroupTranslationEntity[] getElements()
 * @method PropertyGroupTranslationEntity|null get(string $key)
 * @method PropertyGroupTranslationEntity|null first()
 * @method PropertyGroupTranslationEntity|null last()
 */
class PropertyGroupTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PropertyGroupTranslationEntity::class;
    }
}
