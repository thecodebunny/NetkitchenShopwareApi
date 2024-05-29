<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\TaxProvider;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(TaxProviderEntity $entity)
 * @method void set(TaxProviderEntity $entity)
 * @method TaxProviderEntity[] getIterator()
 * @method TaxProviderEntity[] getElements()
 * @method TaxProviderEntity|null get(string $key)
 * @method TaxProviderEntity|null first()
 * @method TaxProviderEntity|null last()
 */
class TaxProviderCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return TaxProviderEntity::class;
    }
}
