<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\AppTemplate;

use Netktichen\ShopwareApi\Data\Entity\App\AppEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppTemplateEntity extends Entity
{
    public ?string $template = null;

    public ?string $path = null;

    public ?bool $active = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
