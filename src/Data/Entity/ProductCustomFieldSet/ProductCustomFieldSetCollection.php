<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductCustomFieldSet;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductCustomFieldSetEntity $entity)
 * @method void set(ProductCustomFieldSetEntity $entity)
 * @method ProductCustomFieldSetEntity[] getIterator()
 * @method ProductCustomFieldSetEntity[] getElements()
 * @method ProductCustomFieldSetEntity|null get(string $key)
 * @method ProductCustomFieldSetEntity|null first()
 * @method ProductCustomFieldSetEntity|null last()
 */
class ProductCustomFieldSetCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductCustomFieldSetEntity::class;
    }
}
