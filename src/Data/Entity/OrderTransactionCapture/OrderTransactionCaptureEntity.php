<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\OrderTransactionCapture;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureEntity extends Entity
{
    public ?string $orderTransactionId = null;

    public ?string $orderTransactionVersionId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderTransactionEntity $transaction = null;

    public ?OrderTransactionCaptureRefundCollection $refunds = null;

    public ?string $externalReference = null;

    public ?array $amount = null;
}
