<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Hydrate;

use Thecodebunny\ShopwareApi\Data\Context;
use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;
use Thecodebunny\ShopwareApi\Data\Schema\Schema;

interface HydratorInterface
{
    public function schema(string $entity, Context $context): Schema;

    public function hydrateSearchResult(array $response, Context $context, ?string $entityName): EntityCollection;
}
