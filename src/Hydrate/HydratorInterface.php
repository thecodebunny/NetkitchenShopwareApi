<?php

declare(strict_types=1);

namespace Netktichen\ShopwareApi\Hydrate;

use Netktichen\ShopwareApi\Data\Context;
use Netktichen\ShopwareApi\Data\Entity\EntityCollection;
use Netktichen\ShopwareApi\Data\Schema\Schema;

interface HydratorInterface
{
    public function schema(string $entity, Context $context): Schema;

    public function hydrateSearchResult(array $response, Context $context, ?string $entityName): EntityCollection;
}
