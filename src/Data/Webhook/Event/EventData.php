<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Webhook\Event;

use Thecodebunny\ShopwareApi\Data\Struct;

class EventData extends Struct
{
    protected string $event;

    protected array $payload;

    public function __construct(string $event, array $payload)
    {
        $this->event = $event;
        $this->payload = $payload;
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }
}
