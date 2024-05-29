<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductFeatureSet;

use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
