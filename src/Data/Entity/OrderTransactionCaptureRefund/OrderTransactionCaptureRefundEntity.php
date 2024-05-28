<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund;

use Netktichen\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use Netktichen\ShopwareApi\Data\Entity\OrderTransactionCapture\OrderTransactionCaptureEntity;
use Netktichen\ShopwareApi\Data\Entity\OrderTransactionCaptureRefundPosition\OrderTransactionCaptureRefundPositionCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
