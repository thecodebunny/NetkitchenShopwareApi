<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AclUserRole;

use Thecodebunny\ShopwareApi\Data\Entity\User\UserEntity;
use Thecodebunny\ShopwareApi\Data\Entity\AclRole\AclRoleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
