<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\IntegrationRole;

use Netktichen\ShopwareApi\Data\Entity\Integration\IntegrationEntity;
use Netktichen\ShopwareApi\Data\Entity\AclRole\AclRoleEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationRoleEntity extends Entity
{
    public ?string $integrationId = null;

    public ?string $aclRoleId = null;

    public ?IntegrationEntity $integration = null;

    public ?AclRoleEntity $role = null;
}
