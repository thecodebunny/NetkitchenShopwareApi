<?php declare(strict_types=1);

namespace Vin\Script;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

class DummyCollectionClass extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return DummyEntityClass::class;
    }
}
