<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductProperty;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductPropertyEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $optionId = null;

    public ?ProductEntity $product = null;

    public ?PropertyGroupOptionEntity $option = null;
}
