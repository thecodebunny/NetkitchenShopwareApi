<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\UserConfig;

use Netktichen\ShopwareApi\Data\Entity\User\UserEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserConfigEntity extends Entity
{
    public ?string $userId = null;

    public ?string $key = null;

    public ?array $value = null;

    public ?UserEntity $user = null;
}
