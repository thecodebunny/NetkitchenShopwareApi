<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomerWishlistProduct;

use TheCodeBunny\ShopwareApi\Data\Entity\CustomerWishlist\CustomerWishlistEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
