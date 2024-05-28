<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Version;

use Netktichen\ShopwareApi\Data\Entity\VersionCommit\VersionCommitCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionEntity extends Entity
{
    public ?string $name = null;

    public ?VersionCommitCollection $commits = null;
}
