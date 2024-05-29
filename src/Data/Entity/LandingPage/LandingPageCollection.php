<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LandingPage;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(LandingPageEntity $entity)
 * @method void set(LandingPageEntity $entity)
 * @method LandingPageEntity[] getIterator()
 * @method LandingPageEntity[] getElements()
 * @method LandingPageEntity|null get(string $key)
 * @method LandingPageEntity|null first()
 * @method LandingPageEntity|null last()
 */
class LandingPageCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return LandingPageEntity::class;
    }
}
