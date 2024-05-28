<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ScheduledTask;

use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ScheduledTaskEntity extends Entity
{
    public ?string $name = null;

    public ?string $scheduledTaskClass = null;

    public ?int $runInterval = null;

    public ?string $status = null;

    public ?\DateTimeInterface$lastExecutionTime = null;

    public ?\DateTimeInterface$nextExecutionTime = null;
}
