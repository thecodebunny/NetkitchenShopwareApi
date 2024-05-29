<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomerWishlist;

use TheCodeBunny\ShopwareApi\Data\Entity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $salesChannelId = null;

    public ?CustomerWishlistProductCollection $products = null;

    public ?CustomerEntity $customer = null;

    public ?SalesChannelEntity $salesChannel = null;
}
