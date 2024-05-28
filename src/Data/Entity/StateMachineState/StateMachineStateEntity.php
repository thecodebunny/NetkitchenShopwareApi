<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\StateMachineState;

use Netktichen\ShopwareApi\Data\Entity\StateMachine\StateMachineEntity;
use Netktichen\ShopwareApi\Data\Entity\StateMachineTransition\StateMachineTransitionCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderTransactionCapture\OrderTransactionCaptureCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateEntity extends Entity
{
    public ?string $technicalName = null;

    public ?string $name = null;

    public ?string $stateMachineId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?StateMachineTransitionCollection $fromStateMachineTransitions = null;

    public ?StateMachineTransitionCollection $toStateMachineTransitions = null;

    public ?StateMachineStateTranslationCollection $translations = null;

    public ?OrderTransactionCollection $orderTransactions = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?OrderCollection $orders = null;

    public ?OrderTransactionCaptureCollection $orderTransactionCaptures = null;

    public ?OrderTransactionCaptureRefundCollection $orderTransactionCaptureRefunds = null;

    public ?StateMachineHistoryCollection $toStateMachineHistoryEntries = null;

    public ?StateMachineHistoryCollection $fromStateMachineHistoryEntries = null;
}
