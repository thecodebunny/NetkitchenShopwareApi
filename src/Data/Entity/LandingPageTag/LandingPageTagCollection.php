<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LandingPageTag;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(LandingPageTagEntity $entity)
 * @method void set(LandingPageTagEntity $entity)
 * @method LandingPageTagEntity[] getIterator()
 * @method LandingPageTagEntity[] getElements()
 * @method LandingPageTagEntity|null get(string $key)
 * @method LandingPageTagEntity|null first()
 * @method LandingPageTagEntity|null last()
 */
class LandingPageTagCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return LandingPageTagEntity::class;
    }
}
