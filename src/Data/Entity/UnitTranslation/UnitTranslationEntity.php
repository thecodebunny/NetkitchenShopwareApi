<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\UnitTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\Unit\UnitEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UnitTranslationEntity extends Entity
{
    public ?string $shortCode = null;

    public ?string $name = null;

    public ?string $unitId = null;

    public ?string $languageId = null;

    public ?UnitEntity $unit = null;

    public ?LanguageEntity $language = null;
}
