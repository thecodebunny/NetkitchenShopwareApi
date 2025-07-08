<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PropertyGroupOptionTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupOptionTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?int $position = null;

    public ?string $propertyGroupOptionId = null;

    public ?string $languageId = null;

    public ?PropertyGroupOptionEntity $propertyGroupOption = null;

    public ?LanguageEntity $language = null;
}
