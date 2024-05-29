<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\StateMachineStateTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
