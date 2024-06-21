<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data;

interface ParseAware
{
    public function parse(): array;
}
