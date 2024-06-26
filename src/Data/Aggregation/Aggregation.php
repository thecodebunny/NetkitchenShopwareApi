<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Aggregation;

use Thecodebunny\ShopwareApi\Data\ParseAware;

abstract class Aggregation implements ParseAware
{
    public const TYPE_FILTER = 'filter';

    public const TYPE_SUM = 'sum';

    public const TYPE_TERMS = 'terms';

    public const TYPE_MIN = 'min';

    public const TYPE_MAX = 'max';

    public const TYPE_STATS = 'stats';

    public const TYPE_ENTITY = 'entity';

    public const TYPE_COUNT = 'count';

    public const TYPE_AVG = 'avg';

    public const TYPE_HISTOGRAM = 'histogram';
}
