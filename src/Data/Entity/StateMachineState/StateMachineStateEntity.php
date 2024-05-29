<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachine\StateMachineEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineTransition\StateMachineTransitionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransactionCapture\OrderTransactionCaptureCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
