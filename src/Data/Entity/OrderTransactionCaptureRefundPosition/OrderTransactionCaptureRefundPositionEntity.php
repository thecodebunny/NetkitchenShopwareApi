<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefundPosition;

use Thecodebunny\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureRefundPositionEntity extends Entity
{
    public ?string $refundId = null;

    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?OrderLineItemEntity $orderLineItem = null;

    public ?OrderTransactionCaptureRefundEntity $orderTransactionCaptureRefund = null;

    public ?string $externalReference = null;

    public ?string $reason = null;

    public ?int $quantity = null;

    public ?array $amount = null;
}
