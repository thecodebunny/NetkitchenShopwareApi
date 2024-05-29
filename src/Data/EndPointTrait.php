<?php declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Data;

trait EndPointTrait
{
    private function removeLastSlashes(string $endpoint): string
    {
        while (substr($endpoint, -1) === '/') {
            $endpoint = rtrim($endpoint, '/');
        }

        return $endpoint;
    }
}