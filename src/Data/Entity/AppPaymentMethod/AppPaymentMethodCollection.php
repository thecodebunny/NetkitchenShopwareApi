<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppPaymentMethod;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppPaymentMethodEntity $entity)
 * @method void set(AppPaymentMethodEntity $entity)
 * @method AppPaymentMethodEntity[] getIterator()
 * @method AppPaymentMethodEntity[] getElements()
 * @method AppPaymentMethodEntity|null get(string $key)
 * @method AppPaymentMethodEntity|null first()
 * @method AppPaymentMethodEntity|null last()
 */
class AppPaymentMethodCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AppPaymentMethodEntity::class;
    }
}
