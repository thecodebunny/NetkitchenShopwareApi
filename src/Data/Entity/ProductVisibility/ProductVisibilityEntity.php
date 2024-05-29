<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductVisibility;

use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductVisibilityEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $salesChannelId = null;

    public ?int $visibility = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?ProductEntity $product = null;
}
