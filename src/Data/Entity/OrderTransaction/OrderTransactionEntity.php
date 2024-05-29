<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\OrderTransaction;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransactionCapture\OrderTransactionCaptureCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
