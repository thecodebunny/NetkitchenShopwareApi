<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Unit;

use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\UnitTranslation\UnitTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UnitEntity extends Entity
{
    public ?string $shortCode = null;

    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?UnitTranslationCollection $translations = null;
}
