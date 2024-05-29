<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CategoryTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CategoryTranslationEntity $entity)
 * @method void set(CategoryTranslationEntity $entity)
 * @method CategoryTranslationEntity[] getIterator()
 * @method CategoryTranslationEntity[] getElements()
 * @method CategoryTranslationEntity|null get(string $key)
 * @method CategoryTranslationEntity|null first()
 * @method CategoryTranslationEntity|null last()
 */
class CategoryTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CategoryTranslationEntity::class;
    }
}
