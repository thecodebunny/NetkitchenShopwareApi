<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderTransaction;

use Netktichen\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderEntity;
use Netktichen\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\OrderTransactionCapture\OrderTransactionCaptureCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionEntity extends Entity
{
    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $paymentMethodId = null;

    public ?array $amount = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderEntity $order = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?OrderTransactionCaptureCollection $captures = null;
}
