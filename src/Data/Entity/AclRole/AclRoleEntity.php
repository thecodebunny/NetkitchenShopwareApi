<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\AclRole;

use TheCodeBunny\ShopwareApi\Data\Entity\User\UserCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\App\AppEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Integration\IntegrationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AclRoleEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?array $privileges = null;

    public ?\DateTimeInterface$deletedAt = null;

    public ?UserCollection $users = null;

    public ?AppEntity $app = null;

    public ?IntegrationCollection $integrations = null;
}
