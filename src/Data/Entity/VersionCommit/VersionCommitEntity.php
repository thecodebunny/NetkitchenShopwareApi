<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\VersionCommit;

use TheCodeBunny\ShopwareApi\Data\Entity\VersionCommitData\VersionCommitDataCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Version\VersionEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCommitEntity extends Entity
{
    public ?string $userId = null;

    public ?string $integrationId = null;

    public ?int $autoIncrement = null;

    public ?bool $isMerge = null;

    public ?string $message = null;

    public ?VersionCommitDataCollection $data = null;

    public ?VersionEntity $version = null;
}
