<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomerWishlistProduct;

use Netktichen\ShopwareApi\Data\Entity\CustomerWishlist\CustomerWishlistEntity;
use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistProductEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $wishlistId = null;

    public ?CustomerWishlistEntity $wishlist = null;

    public ?ProductEntity $product = null;
}
