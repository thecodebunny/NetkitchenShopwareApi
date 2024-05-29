<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannelLanguage;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelLanguageEntity $entity)
 * @method void set(SalesChannelLanguageEntity $entity)
 * @method SalesChannelLanguageEntity[] getIterator()
 * @method SalesChannelLanguageEntity[] getElements()
 * @method SalesChannelLanguageEntity|null get(string $key)
 * @method SalesChannelLanguageEntity|null first()
 * @method SalesChannelLanguageEntity|null last()
 */
class SalesChannelLanguageCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SalesChannelLanguageEntity::class;
    }
}
