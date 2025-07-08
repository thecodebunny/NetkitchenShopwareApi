<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Version;

use Thecodebunny\ShopwareApi\Data\Entity\VersionCommit\VersionCommitCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
