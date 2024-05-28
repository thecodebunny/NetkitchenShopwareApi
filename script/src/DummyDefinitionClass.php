<?php declare(strict_types=1);

namespace Vin\Script;

use Netktichen\ShopwareApi\Data\Entity\EntityDefinition;
use Netktichen\ShopwareApi\Data\Schema\PropertyCollection;
use Netktichen\ShopwareApi\Data\Schema\Schema;

class DummyDefinitionClass implements EntityDefinition
{
    public const ENTITY_NAME = 'product';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return DummyEntityClass::class;
    }

    public function getEntityCollection(): string
    {
        return DummyCollectionClass::class;
    }

    public function getSchema() : Schema
    {
        return new Schema(self::ENTITY_NAME, new PropertyCollection([]));
    }
}