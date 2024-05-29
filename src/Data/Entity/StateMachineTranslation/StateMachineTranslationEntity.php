<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\StateMachineTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachine\StateMachineEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $stateMachineId = null;

    public ?string $languageId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?LanguageEntity $language = null;
}
