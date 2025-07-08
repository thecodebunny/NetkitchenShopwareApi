<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Promotion;

use Thecodebunny\ShopwareApi\Data\Entity\PromotionSetgroup\PromotionSetgroupCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PromotionSalesChannel\PromotionSalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PromotionDiscount\PromotionDiscountCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PromotionIndividualCode\PromotionIndividualCodeCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PromotionTranslation\PromotionTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
