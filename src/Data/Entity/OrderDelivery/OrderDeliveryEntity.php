<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\OrderDelivery;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryEntity extends Entity
{
    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $shippingOrderAddressId = null;

    public ?string $shippingOrderAddressVersionId = null;

    public ?string $shippingMethodId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?array $trackingCodes = null;

    public ?\DateTimeInterface$shippingDateEarliest = null;

    public ?\DateTimeInterface$shippingDateLatest = null;

    public ?array $shippingCosts = null;

    public ?OrderEntity $order = null;

    public ?OrderAddressEntity $shippingOrderAddress = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?OrderDeliveryPositionCollection $positions = null;
}
