<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Script;

use TheCodeBunny\ShopwareApi\Data\Entity\App\AppEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ScriptEntity extends Entity
{
    public ?string $script = null;

    public ?string $hook = null;

    public ?string $name = null;

    public ?bool $active = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
