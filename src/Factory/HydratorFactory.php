<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Factory;

use Thecodebunny\ShopwareApi\Hydrate\EntityHydrator;
use Thecodebunny\ShopwareApi\Hydrate\HydratorInterface;

class HydratorFactory
{
    public static bool $hydratorUseCache = false;

    public static function create(): HydratorInterface
    {
        return new EntityHydrator(self::$hydratorUseCache);
    }
}
