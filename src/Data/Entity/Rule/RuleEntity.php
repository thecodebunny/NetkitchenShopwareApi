<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Rule;

use Netktichen\ShopwareApi\Data\Entity\RuleCondition\RuleConditionCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductPrice\ProductPriceCollection;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethodPrice\ShippingMethodPriceCollection;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\FlowSequence\FlowSequenceCollection;
use Netktichen\ShopwareApi\Data\Entity\TaxProvider\TaxProviderCollection;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagCollection;
use Netktichen\ShopwareApi\Data\Entity\Promotion\PromotionCollection;
use Netktichen\ShopwareApi\Data\Entity\PromotionDiscount\PromotionDiscountCollection;
use Netktichen\ShopwareApi\Data\Entity\PromotionSetgroup\PromotionSetgroupCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleEntity extends Entity
{
    public ?string $name = null;

    public ?int $priority = null;

    public ?string $description = null;

    public ?string $payload = null;

    public ?bool $invalid = null;

    public ?array $areas = null;

    public ?array $moduleTypes = null;

    public ?RuleConditionCollection $conditions = null;

    public ?ProductPriceCollection $productPrices = null;

    public ?ShippingMethodPriceCollection $shippingMethodPrices = null;

    public ?ShippingMethodPriceCollection $shippingMethodPriceCalculations = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?PromotionCollection $personaPromotions = null;

    public ?FlowSequenceCollection $flowSequences = null;

    public ?TaxProviderCollection $taxProviders = null;

    public ?TagCollection $tags = null;

    public ?PromotionCollection $orderPromotions = null;

    public ?PromotionCollection $cartPromotions = null;

    public ?PromotionDiscountCollection $promotionDiscounts = null;

    public ?PromotionSetgroupCollection $promotionSetGroups = null;
}
