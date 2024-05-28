<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductCrossSellingAssignedProducts;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductCrossSelling\ProductCrossSellingEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingAssignedProductsEntity extends Entity
{
    public ?string $crossSellingId = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?ProductEntity $product = null;

    public ?ProductCrossSellingEntity $crossSelling = null;

    public ?int $position = null;
}
