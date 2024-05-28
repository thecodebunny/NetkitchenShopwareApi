<?php declare(strict_types=1);

namespace Netktichen\ShopwareApi\Service\Struct;

use Netktichen\ShopwareApi\Data\Collection;
use Netktichen\ShopwareApi\Data\ParseAware;

class SyncPayload extends Collection implements ParseAware
{
    protected function getExpectedClass(): ?string
    {
        return SyncOperator::class;
    }

    public function parse(): array
    {
        $payload = [];
        /** @var SyncOperator $element */
        foreach ($this->elements as $key => $element) {
            $payload[$key] = $element->parse();
        }

        return $payload;
    }
}
