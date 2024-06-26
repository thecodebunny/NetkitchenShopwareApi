<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Filter;

class NotFilter extends Filter
{
    public const OP_AND = 'and';

    public const OP_OR = 'or';

    public const OP_XOR = 'xor';

    public string $operator;

    /**
     * @var Filter[]
     */
    public array $queries;

    public function __construct(string $operator, array $queries)
    {
        $this->operator = $operator;
        $this->queries = $queries;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_NOT,
            'operator' => $this->operator,
            'queries' => array_map(function (Filter $filter) {
                return $filter->parse();
            }, $this->queries)
        ];
    }
}
