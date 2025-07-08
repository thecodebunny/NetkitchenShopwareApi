<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductPrice;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductPriceEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $ruleId = null;

    public ?array $price = null;

    public ?int $quantityStart = null;

    public ?int $quantityEnd = null;

    public ?ProductEntity $product = null;

    public ?RuleEntity $rule = null;
}
