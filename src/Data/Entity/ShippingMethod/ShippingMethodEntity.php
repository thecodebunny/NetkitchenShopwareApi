<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ShippingMethod;

use Netktichen\ShopwareApi\Data\Entity\DeliveryTime\DeliveryTimeEntity;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethodPrice\ShippingMethodPriceCollection;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\Tax\TaxEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodEntity extends Entity
{
    public ?string $name = null;

    public ?bool $active = null;

    public ?int $position = null;

    public ?string $availabilityRuleId = null;

    public ?string $mediaId = null;

    public ?string $deliveryTimeId = null;

    public ?string $taxType = null;

    public ?string $taxId = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?string $description = null;

    public ?string $trackingUrl = null;

    public ?ShippingMethodTranslationCollection $translations = null;

    public ?RuleEntity $availabilityRule = null;

    public ?ShippingMethodPriceCollection $prices = null;

    public ?MediaEntity $media = null;

    public ?TagCollection $tags = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?TaxEntity $tax = null;
}
