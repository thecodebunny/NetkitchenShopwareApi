<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductCategory;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\Category\CategoryEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCategoryEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?ProductEntity $product = null;

    public ?CategoryEntity $category = null;
}
