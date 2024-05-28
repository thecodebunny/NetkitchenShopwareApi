<?php

declare(strict_types=1);

namespace Netktichen\ShopwareApi\Data\Entity;

use Netktichen\ShopwareApi\Data\Schema\Schema;

interface EntityDefinition
{
    public function getEntityName(): string;

    public function getEntityClass(): string;

    public function getEntityCollection(): string;

    public function getSchema(): Schema;
}
