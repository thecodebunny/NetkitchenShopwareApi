<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ImportExportProfileTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ImportExportProfileTranslationEntity $entity)
 * @method void set(ImportExportProfileTranslationEntity $entity)
 * @method ImportExportProfileTranslationEntity[] getIterator()
 * @method ImportExportProfileTranslationEntity[] getElements()
 * @method ImportExportProfileTranslationEntity|null get(string $key)
 * @method ImportExportProfileTranslationEntity|null first()
 * @method ImportExportProfileTranslationEntity|null last()
 */
class ImportExportProfileTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ImportExportProfileTranslationEntity::class;
    }
}
