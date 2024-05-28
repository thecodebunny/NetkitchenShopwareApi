<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\AclUserRole;

use Netktichen\ShopwareApi\Data\Entity\User\UserEntity;
use Netktichen\ShopwareApi\Data\Entity\AclRole\AclRoleEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AclUserRoleEntity extends Entity
{
    public ?string $userId = null;

    public ?string $aclRoleId = null;

    public ?UserEntity $user = null;

    public ?AclRoleEntity $aclRole = null;
}
