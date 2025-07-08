<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ImportExportLog;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ImportExportLogEntity $entity)
 * @method void set(ImportExportLogEntity $entity)
 * @method ImportExportLogEntity[] getIterator()
 * @method ImportExportLogEntity[] getElements()
 * @method ImportExportLogEntity|null get(string $key)
 * @method ImportExportLogEntity|null first()
 * @method ImportExportLogEntity|null last()
 */
class ImportExportLogCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ImportExportLogEntity::class;
    }
}
