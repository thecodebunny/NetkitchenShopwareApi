<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LocaleTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(LocaleTranslationEntity $entity)
 * @method void set(LocaleTranslationEntity $entity)
 * @method LocaleTranslationEntity[] getIterator()
 * @method LocaleTranslationEntity[] getElements()
 * @method LocaleTranslationEntity|null get(string $key)
 * @method LocaleTranslationEntity|null first()
 * @method LocaleTranslationEntity|null last()
 */
class LocaleTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return LocaleTranslationEntity::class;
    }
}
