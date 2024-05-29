<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductStream;

use TheCodeBunny\ShopwareApi\Data\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductStreamFilter\ProductStreamFilterCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductCrossSelling\ProductCrossSellingCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductExport\ProductExportCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Category\CategoryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamEntity extends Entity
{
    public ?array $apiFilter = null;

    public ?bool $invalid = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?ProductStreamTranslationCollection $translations = null;

    public ?ProductStreamFilterCollection $filters = null;

    public ?ProductCrossSellingCollection $productCrossSellings = null;

    public ?ProductExportCollection $productExports = null;

    public ?CategoryCollection $categories = null;
}
