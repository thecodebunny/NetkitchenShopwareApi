<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\UserRecovery;

use Netktichen\ShopwareApi\Data\Entity\User\UserEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserRecoveryEntity extends Entity
{
    public ?string $hash = null;

    public ?string $userId = null;

    public ?UserEntity $user = null;
}
