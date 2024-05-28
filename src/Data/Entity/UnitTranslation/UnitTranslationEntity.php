<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\UnitTranslation;

use Netktichen\ShopwareApi\Data\Entity\Unit\UnitEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
