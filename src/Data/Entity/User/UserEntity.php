<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\User;

use TheCodeBunny\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\UserAccessKey\UserAccessKeyCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\UserConfig\UserConfigCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ImportExportLog\ImportExportLogCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\AclRole\AclRoleCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\UserRecovery\UserRecoveryEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Notification\NotificationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
