<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ScheduledTask;

use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
