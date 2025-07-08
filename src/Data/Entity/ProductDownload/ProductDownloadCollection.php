<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductDownload;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductDownloadEntity $entity)
 * @method void set(ProductDownloadEntity $entity)
 * @method ProductDownloadEntity[] getIterator()
 * @method ProductDownloadEntity[] getElements()
 * @method ProductDownloadEntity|null get(string $key)
 * @method ProductDownloadEntity|null first()
 * @method ProductDownloadEntity|null last()
 */
class ProductDownloadCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductDownloadEntity::class;
    }
}
