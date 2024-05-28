<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\StateMachineTransition;

use Netktichen\ShopwareApi\Data\Entity\StateMachine\StateMachineEntity;
use Netktichen\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTransitionEntity extends Entity
{
    public ?string $actionName = null;

    public ?string $stateMachineId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $fromStateId = null;

    public ?StateMachineStateEntity $fromStateMachineState = null;

    public ?string $toStateId = null;

    public ?StateMachineStateEntity $toStateMachineState = null;
}
