<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Webhook;

use Netktichen\ShopwareApi\Data\Entity\App\AppEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class WebhookEntity extends Entity
{
    public ?string $name = null;

    public ?string $eventName = null;

    public ?string $url = null;

    public ?int $errorCount = null;

    public ?bool $active = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}