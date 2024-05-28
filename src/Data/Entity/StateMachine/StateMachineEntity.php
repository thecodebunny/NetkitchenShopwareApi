<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\StateMachine;

use Netktichen\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineTransition\StateMachineTransitionCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
