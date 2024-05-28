<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Unit;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Entity\UnitTranslation\UnitTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
