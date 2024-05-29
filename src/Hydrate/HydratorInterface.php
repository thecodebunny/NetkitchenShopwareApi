<?php

declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Hydrate;

use TheCodeBunny\ShopwareApi\Data\Context;
use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;
use TheCodeBunny\ShopwareApi\Data\Schema\Schema;

interface HydratorInterface
{
    public function schema(string $entity, Context $context): Schema;

    public function hydrateSearchResult(array $response, Context $context, ?string $entityName): EntityCollection;
}
