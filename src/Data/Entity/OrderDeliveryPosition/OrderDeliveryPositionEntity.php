<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderDeliveryPosition;

use Netktichen\ShopwareApi\Data\Entity\OrderDelivery\OrderDeliveryEntity;
use Netktichen\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryPositionEntity extends Entity
{
    public ?string $orderDeliveryId = null;

    public ?string $orderDeliveryVersionId = null;

    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?array $price = null;

    public ?float $unitPrice = null;

    public ?float $totalPrice = null;

    public ?int $quantity = null;

    public ?OrderDeliveryEntity $orderDelivery = null;

    public ?OrderLineItemEntity $orderLineItem = null;
}
