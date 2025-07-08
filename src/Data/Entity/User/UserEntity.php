<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\User;

use Thecodebunny\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaCollection;
use Thecodebunny\ShopwareApi\Data\Entity\UserAccessKey\UserAccessKeyCollection;
use Thecodebunny\ShopwareApi\Data\Entity\UserConfig\UserConfigCollection;
use Thecodebunny\ShopwareApi\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ImportExportLog\ImportExportLogCollection;
use Thecodebunny\ShopwareApi\Data\Entity\AclRole\AclRoleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\UserRecovery\UserRecoveryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Notification\NotificationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserEntity extends Entity
{
    public ?string $localeId = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $title = null;

    public ?string $email = null;

    public ?bool $active = null;

    public ?bool $admin = null;

    public ?\DateTimeInterface$lastUpdatedPasswordAt = null;

    public ?string $timeZone = null;

    public ?LocaleEntity $locale = null;

    public ?string $avatarId = null;

    public ?MediaEntity $avatarMedia = null;

    public ?MediaCollection $media = null;

    public ?UserAccessKeyCollection $accessKeys = null;

    public ?UserConfigCollection $configs = null;

    public ?StateMachineHistoryCollection $stateMachineHistoryEntries = null;

    public ?ImportExportLogCollection $importExportLogEntries = null;

    public ?AclRoleCollection $aclRoles = null;

    public ?UserRecoveryEntity $recoveryUser = null;

    public ?string $storeToken = null;

    public ?OrderCollection $createdOrders = null;

    public ?OrderCollection $updatedOrders = null;

    public ?CustomerCollection $createdCustomers = null;

    public ?CustomerCollection $updatedCustomers = null;

    public ?NotificationCollection $createdNotifications = null;
}
