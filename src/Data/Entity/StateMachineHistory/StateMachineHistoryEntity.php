<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\StateMachineHistory;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachine\StateMachineEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\User\UserEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineHistoryEntity extends Entity
{
    public ?string $stateMachineId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $entityName = null;

    public ?array $entityId = null;

    public ?string $fromStateId = null;

    public ?StateMachineStateEntity $fromStateMachineState = null;

    public ?string $toStateId = null;

    public ?StateMachineStateEntity $toStateMachineState = null;

    public ?string $transitionActionName = null;

    public ?string $userId = null;

    public ?UserEntity $user = null;
}
