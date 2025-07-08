<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PaymentMethod;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PaymentMethodEntity $entity)
 * @method void set(PaymentMethodEntity $entity)
 * @method PaymentMethodEntity[] getIterator()
 * @method PaymentMethodEntity[] getElements()
 * @method PaymentMethodEntity|null get(string $key)
 * @method PaymentMethodEntity|null first()
 * @method PaymentMethodEntity|null last()
 */
class PaymentMethodCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PaymentMethodEntity::class;
    }
}
