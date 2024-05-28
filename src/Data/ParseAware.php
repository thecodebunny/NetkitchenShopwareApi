<?php

declare(strict_types=1);

namespace Netktichen\ShopwareApi\Data;

interface ParseAware
{
    public function parse(): array;
}
