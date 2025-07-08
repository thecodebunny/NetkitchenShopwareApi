<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\StateMachineStateTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $stateMachineStateId = null;

    public ?string $languageId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?LanguageEntity $language = null;
}
