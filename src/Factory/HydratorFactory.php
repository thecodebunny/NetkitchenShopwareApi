<?php declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Factory;

use TheCodeBunny\ShopwareApi\Hydrate\EntityHydrator;
use TheCodeBunny\ShopwareApi\Hydrate\HydratorInterface;

class HydratorFactory
{
    public static bool $hydratorUseCache = false;

    public static function create(): HydratorInterface
    {
        return new EntityHydrator(self::$hydratorUseCache);
    }
}
