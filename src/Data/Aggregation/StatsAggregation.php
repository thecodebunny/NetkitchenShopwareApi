<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Aggregation;

class StatsAggregation extends Aggregation
{
    public string $name;

    public string $field;

    public function __construct(string $name, string $field)
    {
        $this->name = $name;
        $this->field = $field;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_STATS,
            'name' => $this->name,
            'field' => $this->field
        ];
    }
}
