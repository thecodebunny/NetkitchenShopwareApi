<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomerRecovery;

use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
