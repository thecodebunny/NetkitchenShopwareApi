<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductCrossSellingTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\ProductCrossSelling\ProductCrossSellingEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $productCrossSellingId = null;

    public ?string $languageId = null;

    public ?ProductCrossSellingEntity $productCrossSelling = null;

    public ?LanguageEntity $language = null;
}
