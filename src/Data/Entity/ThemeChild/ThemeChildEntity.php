<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ThemeChild;

use Thecodebunny\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
