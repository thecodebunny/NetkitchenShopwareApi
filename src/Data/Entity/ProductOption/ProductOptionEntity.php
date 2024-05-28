<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductOption;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductOptionEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $optionId = null;

    public ?ProductEntity $product = null;

    public ?PropertyGroupOptionEntity $option = null;
}
