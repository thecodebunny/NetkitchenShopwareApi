<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\StateMachineTranslation;

use Netktichen\ShopwareApi\Data\Entity\StateMachine\StateMachineEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
