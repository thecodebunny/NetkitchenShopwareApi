<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroup;

use TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $displayType = null;

    public ?string $sortingType = null;

    public ?bool $filterable = null;

    public ?bool $visibleOnProductDetailPage = null;

    public ?int $position = null;

    public ?PropertyGroupOptionCollection $options = null;

    public ?PropertyGroupTranslationCollection $translations = null;
}
