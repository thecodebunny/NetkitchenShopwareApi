<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Language;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(LanguageEntity $entity)
 * @method void set(LanguageEntity $entity)
 * @method LanguageEntity[] getIterator()
 * @method LanguageEntity[] getElements()
 * @method LanguageEntity|null get(string $key)
 * @method LanguageEntity|null first()
 * @method LanguageEntity|null last()
 */
class LanguageCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return LanguageEntity::class;
    }
}
