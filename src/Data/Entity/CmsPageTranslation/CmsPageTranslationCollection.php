<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CmsPageTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CmsPageTranslationEntity $entity)
 * @method void set(CmsPageTranslationEntity $entity)
 * @method CmsPageTranslationEntity[] getIterator()
 * @method CmsPageTranslationEntity[] getElements()
 * @method CmsPageTranslationEntity|null get(string $key)
 * @method CmsPageTranslationEntity|null first()
 * @method CmsPageTranslationEntity|null last()
 */
class CmsPageTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CmsPageTranslationEntity::class;
    }
}
