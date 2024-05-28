<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomerWishlist;

use Netktichen\ShopwareApi\Data\Entity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
