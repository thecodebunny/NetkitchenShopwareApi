<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductExport;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductExportEntity $entity)
 * @method void set(ProductExportEntity $entity)
 * @method ProductExportEntity[] getIterator()
 * @method ProductExportEntity[] getElements()
 * @method ProductExportEntity|null get(string $key)
 * @method ProductExportEntity|null first()
 * @method ProductExportEntity|null last()
 */
class ProductExportCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductExportEntity::class;
    }
}
