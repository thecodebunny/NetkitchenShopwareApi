<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CountryState;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CountryStateEntity $entity)
 * @method void set(CountryStateEntity $entity)
 * @method CountryStateEntity[] getIterator()
 * @method CountryStateEntity[] getElements()
 * @method CountryStateEntity|null get(string $key)
 * @method CountryStateEntity|null first()
 * @method CountryStateEntity|null last()
 */
class CountryStateCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CountryStateEntity::class;
    }
}
