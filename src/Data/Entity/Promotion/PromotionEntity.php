<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Promotion;

use TheCodeBunny\ShopwareApi\Data\Entity\PromotionSetgroup\PromotionSetgroupCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PromotionSalesChannel\PromotionSalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PromotionDiscount\PromotionDiscountCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PromotionIndividualCode\PromotionIndividualCodeCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PromotionTranslation\PromotionTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionEntity extends Entity
{
    public ?string $name = null;

    public ?bool $active = null;

    public ?\DateTimeInterface$validFrom = null;

    public ?\DateTimeInterface$validUntil = null;

    public ?int $maxRedemptionsGlobal = null;

    public ?int $maxRedemptionsPerCustomer = null;

    public ?int $priority = null;

    public ?bool $exclusive = null;

    public ?string $code = null;

    public ?bool $useCodes = null;

    public ?bool $useIndividualCodes = null;

    public ?string $individualCodePattern = null;

    public ?bool $useSetGroups = null;

    public ?bool $customerRestriction = null;

    public ?bool $preventCombination = null;

    public ?int $orderCount = null;

    public ?array $ordersPerCustomerCount = null;

    public ?PromotionSetgroupCollection $setgroups = null;

    public ?PromotionSalesChannelCollection $salesChannels = null;

    public ?PromotionDiscountCollection $discounts = null;

    public ?PromotionIndividualCodeCollection $individualCodes = null;

    public ?RuleCollection $personaRules = null;

    public ?CustomerCollection $personaCustomers = null;

    public ?RuleCollection $orderRules = null;

    public ?RuleCollection $cartRules = null;

    public ?OrderLineItemCollection $orderLineItems = null;

    public ?PromotionTranslationCollection $translations = null;

    public ?array $exclusionIds = null;
}
