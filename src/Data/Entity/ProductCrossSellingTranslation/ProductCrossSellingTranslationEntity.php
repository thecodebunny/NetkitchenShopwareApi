<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductCrossSellingTranslation;

use Netktichen\ShopwareApi\Data\Entity\ProductCrossSelling\ProductCrossSellingEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
