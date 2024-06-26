<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Aggregation;

use Thecodebunny\ShopwareApi\Data\Filter\Filter;

class FilterAggregation extends Aggregation
{
    public string $name;

    /**
     * @var Filter[]
     */
    public array $filter;

    public Aggregation $aggregation;

    public function __construct(string $name, array $filter, Aggregation $aggregation)
    {
        $this->name = $name;
        $this->filter = $filter;
        $this->aggregation = $aggregation;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_FILTER,
            'name' => $this->name,
            'filter' => array_map(function (Filter $filter) {
                return $filter->parse();
            }, $this->filter),
            'aggregation' => $this->aggregation->parse()
        ];
    }
}
