<?php

namespace Thecodebunny\ShopwareApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thecodebunny\ShopwareApi\Skeleton\SkeletonClass
 */
class ShopwareApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shopware-api';
    }
}
