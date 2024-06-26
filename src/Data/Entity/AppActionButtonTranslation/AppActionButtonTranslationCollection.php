<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppActionButtonTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppActionButtonTranslationEntity $entity)
 * @method void set(AppActionButtonTranslationEntity $entity)
 * @method AppActionButtonTranslationEntity[] getIterator()
 * @method AppActionButtonTranslationEntity[] getElements()
 * @method AppActionButtonTranslationEntity|null get(string $key)
 * @method AppActionButtonTranslationEntity|null first()
 * @method AppActionButtonTranslationEntity|null last()
 */
class AppActionButtonTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AppActionButtonTranslationEntity::class;
    }
}
