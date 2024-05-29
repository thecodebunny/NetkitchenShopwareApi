<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCapture;

use Thecodebunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
