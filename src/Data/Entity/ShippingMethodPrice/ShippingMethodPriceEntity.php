<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ShippingMethodPrice;

use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodPriceEntity extends Entity
{
    public ?string $shippingMethodId = null;

    public ?string $ruleId = null;

    public ?int $calculation = null;

    public ?string $calculationRuleId = null;

    public ?float $quantityStart = null;

    public ?float $quantityEnd = null;

    public ?array $currencyPrice = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?RuleEntity $rule = null;

    public ?RuleEntity $calculationRule = null;
}
