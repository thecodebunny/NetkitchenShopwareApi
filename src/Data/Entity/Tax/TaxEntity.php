<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Tax;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Entity\TaxRule\TaxRuleCollection;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxEntity extends Entity
{
    public ?float $taxRate = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?ProductCollection $products = null;

    public ?TaxRuleCollection $rules = null;

    public ?ShippingMethodCollection $shippingMethods = null;
}
