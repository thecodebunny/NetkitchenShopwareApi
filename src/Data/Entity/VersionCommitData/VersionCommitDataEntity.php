<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\VersionCommitData;

use Netktichen\ShopwareApi\Data\Entity\VersionCommit\VersionCommitEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCommitDataEntity extends Entity
{
    public ?string $versionCommitId = null;

    public ?VersionCommitEntity $commit = null;

    public ?string $userId = null;

    public ?string $integrationId = null;

    public ?int $autoIncrement = null;

    public ?string $entityName = null;

    public ?array $entityId = null;

    public ?string $action = null;

    public ?array $payload = null;
}
