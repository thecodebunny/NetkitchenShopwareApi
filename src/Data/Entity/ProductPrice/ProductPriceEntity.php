<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductPrice;

use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
