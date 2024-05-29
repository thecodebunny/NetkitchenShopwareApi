<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CountryTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CountryTranslationEntity $entity)
 * @method void set(CountryTranslationEntity $entity)
 * @method CountryTranslationEntity[] getIterator()
 * @method CountryTranslationEntity[] getElements()
 * @method CountryTranslationEntity|null get(string $key)
 * @method CountryTranslationEntity|null first()
 * @method CountryTranslationEntity|null last()
 */
class CountryTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CountryTranslationEntity::class;
    }
}
