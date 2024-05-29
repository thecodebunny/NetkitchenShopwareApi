<?php declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Repository\Struct;

use TheCodeBunny\ShopwareApi\Data\Struct;

class SearchResultMeta extends Struct
{
    private int $total;

    private int $totalCountMode;

    public function __construct(int $total, int $totalCountMode)
    {
        $this->total = $total;
        $this->totalCountMode = $totalCountMode;
    }

    public function getTotalCountMode(): int
    {
        return $this->totalCountMode;
    }

    public function setTotalCountMode(int $totalCountMode): void
    {
        $this->totalCountMode = $totalCountMode;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): void
    {
        $this->total = $total;
    }
}
