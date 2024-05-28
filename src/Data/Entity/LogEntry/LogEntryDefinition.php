<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\LogEntry;

use Netktichen\ShopwareApi\Data\Entity\EntityDefinition;
use Netktichen\ShopwareApi\Data\Schema\PropertyCollection;
use Netktichen\ShopwareApi\Data\Schema\FlagCollection;
use Netktichen\ShopwareApi\Data\Schema\Property;
use Netktichen\ShopwareApi\Data\Schema\Flag;
use Netktichen\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LogEntryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'log_entry';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LogEntryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LogEntryCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('log_entry', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('message', 'text', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('search_ranking', 500), ]), []),
            new Property('level', 'int', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('channel', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('context', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('search_ranking', 250), ]), []),
            new Property('extra', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('search_ranking', 80), ]), []),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
