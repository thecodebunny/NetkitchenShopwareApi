<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Service\Struct;

use Thecodebunny\ShopwareApi\Data\Collection;
use Thecodebunny\ShopwareApi\Data\ParseAware;

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
