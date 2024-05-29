<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\StateMachine;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineTransition\StateMachineTransitionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineEntity extends Entity
{
    public ?string $technicalName = null;

    public ?string $name = null;

    public ?StateMachineStateCollection $states = null;

    public ?StateMachineTransitionCollection $transitions = null;

    public ?string $initialStateId = null;

    public ?StateMachineTranslationCollection $translations = null;

    public ?StateMachineHistoryCollection $historyEntries = null;
}
