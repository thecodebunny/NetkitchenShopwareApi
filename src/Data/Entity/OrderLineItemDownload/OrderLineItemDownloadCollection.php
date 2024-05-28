<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderLineItemDownload;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(OrderLineItemDownloadEntity $entity)
 * @method void set(OrderLineItemDownloadEntity $entity)
 * @method OrderLineItemDownloadEntity[] getIterator()
 * @method OrderLineItemDownloadEntity[] getElements()
 * @method OrderLineItemDownloadEntity|null get(string $key)
 * @method OrderLineItemDownloadEntity|null first()
 * @method OrderLineItemDownloadEntity|null last()
 */
class OrderLineItemDownloadCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return OrderLineItemDownloadEntity::class;
    }
}
