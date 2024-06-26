<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Integration;

use Thecodebunny\ShopwareApi\Data\Entity\App\AppEntity;
use Thecodebunny\ShopwareApi\Data\Entity\AclRole\AclRoleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Notification\NotificationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationEntity extends Entity
{
    public ?string $label = null;

    public ?string $accessKey = null;

    public ?string $secretAccessKey = null;

    public ?bool $writeAccess = null;

    public ?\DateTimeInterface$lastUsageAt = null;

    public ?bool $admin = null;

    public ?\DateTimeInterface$deletedAt = null;

    public ?AppEntity $app = null;

    public ?AclRoleCollection $aclRoles = null;

    public ?NotificationCollection $createdNotifications = null;
}
