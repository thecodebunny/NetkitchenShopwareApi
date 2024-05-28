<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductStream;

use Netktichen\ShopwareApi\Data\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductStreamFilter\ProductStreamFilterCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductCrossSelling\ProductCrossSellingCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductExport\ProductExportCollection;
use Netktichen\ShopwareApi\Data\Entity\Category\CategoryCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
