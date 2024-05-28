<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\LogEntry;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(LogEntryEntity $entity)
 * @method void set(LogEntryEntity $entity)
 * @method LogEntryEntity[] getIterator()
 * @method LogEntryEntity[] getElements()
 * @method LogEntryEntity|null get(string $key)
 * @method LogEntryEntity|null first()
 * @method LogEntryEntity|null last()
 */
class LogEntryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return LogEntryEntity::class;
    }
}
