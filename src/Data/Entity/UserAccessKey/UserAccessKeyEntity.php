<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\UserAccessKey;

use Thecodebunny\ShopwareApi\Data\Entity\User\UserEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserAccessKeyEntity extends Entity
{
    public ?string $userId = null;

    public ?string $accessKey = null;

    public ?string $secretAccessKey = null;

    public ?\DateTimeInterface$lastUsageAt = null;

    public ?UserEntity $user = null;
}
