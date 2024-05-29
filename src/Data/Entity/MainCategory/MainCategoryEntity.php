<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MainCategory;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Category\CategoryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MainCategoryEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?string $salesChannelId = null;

    public ?ProductEntity $product = null;

    public ?CategoryEntity $category = null;

    public ?SalesChannelEntity $salesChannel = null;
}
