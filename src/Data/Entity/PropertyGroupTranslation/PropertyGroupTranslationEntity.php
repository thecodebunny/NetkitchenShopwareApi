<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroupTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroup\PropertyGroupEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?int $position = null;

    public ?string $propertyGroupId = null;

    public ?string $languageId = null;

    public ?PropertyGroupEntity $propertyGroup = null;

    public ?LanguageEntity $language = null;
}
