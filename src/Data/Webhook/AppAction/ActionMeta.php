<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Webhook\AppAction;

use Thecodebunny\ShopwareApi\Data\Struct;

class ActionMeta extends Struct
{
    protected int $timestamp;

    protected string $reference;

    protected string $language;

    public function __construct(int $timestamp, string $reference, string $language)
    {
        $this->timestamp = $timestamp;
        $this->reference = $reference;
        $this->language = $language;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}
