<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Flow;

use Thecodebunny\ShopwareApi\Data\Entity\FlowSequence\FlowSequenceCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class FlowEntity extends Entity
{
    public ?string $name = null;

    public ?string $eventName = null;

    public ?int $priority = null;

    public ?string $payload = null;

    public ?bool $invalid = null;

    public ?bool $active = null;

    public ?string $description = null;

    public ?FlowSequenceCollection $sequences = null;
}
