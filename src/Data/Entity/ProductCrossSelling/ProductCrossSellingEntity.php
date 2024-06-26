<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductCrossSelling;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\ProductStream\ProductStreamEntity;
use Thecodebunny\ShopwareApi\Data\Entity\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingEntity extends Entity
{
    public ?string $name = null;

    public ?int $position = null;

    public ?string $sortBy = null;

    public ?string $sortDirection = null;

    public ?string $type = null;

    public ?bool $active = null;

    public ?int $limit = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?ProductEntity $product = null;

    public ?string $productStreamId = null;

    public ?ProductStreamEntity $productStream = null;

    public ?ProductCrossSellingAssignedProductsCollection $assignedProducts = null;

    public ?ProductCrossSellingTranslationCollection $translations = null;
}
