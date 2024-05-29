<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Entity;

use Thecodebunny\ShopwareApi\Data\Schema\Schema;

interface EntityDefinition
{
    public function getEntityName(): string;

    public function getEntityClass(): string;

    public function getEntityCollection(): string;

    public function getSchema(): Schema;
}
