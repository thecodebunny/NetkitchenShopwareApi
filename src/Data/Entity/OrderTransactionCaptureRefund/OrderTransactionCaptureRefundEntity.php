<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund;

use Thecodebunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCapture\OrderTransactionCaptureEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefundPosition\OrderTransactionCaptureRefundPositionCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureRefundEntity extends Entity
{
    public ?string $captureId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderTransactionCaptureEntity $transactionCapture = null;

    public ?OrderTransactionCaptureRefundPositionCollection $positions = null;

    public ?string $externalReference = null;

    public ?string $reason = null;

    public ?array $amount = null;
}
