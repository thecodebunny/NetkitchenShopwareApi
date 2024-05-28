<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\VersionCommitData;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(VersionCommitDataEntity $entity)
 * @method void set(VersionCommitDataEntity $entity)
 * @method VersionCommitDataEntity[] getIterator()
 * @method VersionCommitDataEntity[] getElements()
 * @method VersionCommitDataEntity|null get(string $key)
 * @method VersionCommitDataEntity|null first()
 * @method VersionCommitDataEntity|null last()
 */
class VersionCommitDataCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return VersionCommitDataEntity::class;
    }
}
