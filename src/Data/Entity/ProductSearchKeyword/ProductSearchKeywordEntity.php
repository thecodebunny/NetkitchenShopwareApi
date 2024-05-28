<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductSearchKeyword;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchKeywordEntity extends Entity
{
    public ?string $languageId = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $keyword = null;

    public ?float $ranking = null;

    public ?ProductEntity $product = null;

    public ?LanguageEntity $language = null;
}
