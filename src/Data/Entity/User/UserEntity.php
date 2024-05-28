<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\User;

use Netktichen\ShopwareApi\Data\Entity\Locale\LocaleEntity;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaCollection;
use Netktichen\ShopwareApi\Data\Entity\UserAccessKey\UserAccessKeyCollection;
use Netktichen\ShopwareApi\Data\Entity\UserConfig\UserConfigCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Netktichen\ShopwareApi\Data\Entity\ImportExportLog\ImportExportLogCollection;
use Netktichen\ShopwareApi\Data\Entity\AclRole\AclRoleCollection;
use Netktichen\ShopwareApi\Data\Entity\UserRecovery\UserRecoveryEntity;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderCollection;
use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Netktichen\ShopwareApi\Data\Entity\Notification\NotificationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
