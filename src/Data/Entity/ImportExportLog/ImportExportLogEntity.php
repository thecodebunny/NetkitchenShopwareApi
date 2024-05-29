<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ImportExportLog;

use TheCodeBunny\ShopwareApi\Data\Entity\User\UserEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\ImportExportProfile\ImportExportProfileEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\ImportExportFile\ImportExportFileEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportLogEntity extends Entity
{
    public ?string $activity = null;

    public ?string $state = null;

    public ?int $records = null;

    public ?string $userId = null;

    public ?string $profileId = null;

    public ?string $fileId = null;

    public ?string $invalidRecordsLogId = null;

    public ?string $username = null;

    public ?string $profileName = null;

    public ?array $config = null;

    public ?array $result = null;

    public ?UserEntity $user = null;

    public ?ImportExportProfileEntity $profile = null;

    public ?ImportExportFileEntity $file = null;

    public ?ImportExportLogEntity $invalidRecordsLog = null;

    public ?ImportExportLogEntity $failedImportLog = null;
}
