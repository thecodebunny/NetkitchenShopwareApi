<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ThemeChild;

use TheCodeBunny\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeChildEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $childId = null;

    public ?ThemeEntity $parentTheme = null;

    public ?ThemeEntity $childTheme = null;
}
