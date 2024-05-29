<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\UserConfig;

use TheCodeBunny\ShopwareApi\Data\Entity\User\UserEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
