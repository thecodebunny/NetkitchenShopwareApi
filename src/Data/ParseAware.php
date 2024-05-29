<?php

declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Data;

interface ParseAware
{
    public function parse(): array;
}
