<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductCustomFieldSet;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCustomFieldSetEntity extends Entity
{
    public ?string $productId = null;

    public ?string $customFieldSetId = null;

    public ?string $productVersionId = null;

    public ?ProductEntity $product = null;

    public ?CustomFieldSetEntity $customFieldSet = null;
}
