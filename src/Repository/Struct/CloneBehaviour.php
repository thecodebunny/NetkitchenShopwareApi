<?php declare(strict_types=1);

namespace Netktichen\ShopwareApi\Repository\Struct;

use Netktichen\ShopwareApi\Data\Struct;

class CloneBehaviour extends Struct
{
    protected bool $cloneChildren;

    protected array $overwrites;

    public function __construct(bool $cloneChildren = true, array $overwrites = [])
    {
        $this->cloneChildren = $cloneChildren;
        $this->overwrites = $overwrites;
    }

    public function isCloneChildren(): bool
    {
        return $this->cloneChildren;
    }

    public function setCloneChildren(bool $cloneChildren): void
    {
        $this->cloneChildren = $cloneChildren;
    }

    public function getOverwrites(): array
    {
        return $this->overwrites;
    }

    public function setOverwrites(array $overwrites): void
    {
        $this->overwrites = $overwrites;
    }
}
