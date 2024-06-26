<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Schema;

use Thecodebunny\ShopwareApi\Data\Collection;

/**
 * @method Flag|null get($key)
 * @method Flag|null first()
 * @method Flag|null last()
 */
class FlagCollection extends Collection
{
    public function __construct(iterable $elements = [])
    {
        $elements = $elements instanceof \Traversable ? iterator_to_array($elements) : (array) $elements;

        /** @var Flag $element */
        foreach ($elements as $element) {
            $this->set($element->flag, $element);
        }
    }

    protected function getExpectedClass(): ?string
    {
        return Flag::class;
    }
}
