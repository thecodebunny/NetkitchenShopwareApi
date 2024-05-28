<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SeoUrl;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SeoUrlEntity $entity)
 * @method void set(SeoUrlEntity $entity)
 * @method SeoUrlEntity[] getIterator()
 * @method SeoUrlEntity[] getElements()
 * @method SeoUrlEntity|null get(string $key)
 * @method SeoUrlEntity|null first()
 * @method SeoUrlEntity|null last()
 */
class SeoUrlCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SeoUrlEntity::class;
    }
}
