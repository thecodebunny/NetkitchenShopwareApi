<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductSearchKeyword;

use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
