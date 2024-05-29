<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AclRole;

use Thecodebunny\ShopwareApi\Data\Entity\User\UserCollection;
use Thecodebunny\ShopwareApi\Data\Entity\App\AppEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Integration\IntegrationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
