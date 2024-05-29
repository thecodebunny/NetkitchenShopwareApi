<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomerRecovery;

use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerRecoveryEntity extends Entity
{
    public ?string $hash = null;

    public ?string $customerId = null;

    public ?CustomerEntity $customer = null;
}
