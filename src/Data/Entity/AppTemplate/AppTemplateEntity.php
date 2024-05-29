<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppTemplate;

use Thecodebunny\ShopwareApi\Data\Entity\App\AppEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
