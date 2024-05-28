<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductFeatureSet;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?array $features = null;

    public ?ProductCollection $products = null;

    public ?ProductFeatureSetTranslationCollection $translations = null;
}
