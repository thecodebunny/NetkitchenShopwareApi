<?php declare(strict_types=1);

namespace Netktichen\ShopwareApi\Factory;

use Netktichen\ShopwareApi\Hydrate\EntityHydrator;
use Netktichen\ShopwareApi\Hydrate\HydratorInterface;

class HydratorFactory
{
    public static bool $hydratorUseCache = false;

    public static function create(): HydratorInterface
    {
        return new EntityHydrator(self::$hydratorUseCache);
    }
}
