<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LogEntry;

use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LogEntryEntity extends Entity
{
    public ?string $message = null;

    public ?int $level = null;

    public ?string $channel = null;

    public ?array $context = null;

    public ?array $extra = null;
}
