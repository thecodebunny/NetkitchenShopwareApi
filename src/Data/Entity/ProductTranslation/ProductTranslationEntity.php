<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTranslationEntity extends Entity
{
    public ?string $metaDescription = null;

    public ?string $name = null;

    public ?string $keywords = null;

    public ?string $description = null;

    public ?string $metaTitle = null;

    public ?string $packUnit = null;

    public ?string $packUnitPlural = null;

    public ?array $customSearchKeywords = null;

    public ?array $slotConfig = null;

    public ?string $productId = null;

    public ?string $languageId = null;

    public ?ProductEntity $product = null;

    public ?LanguageEntity $language = null;

    public ?string $productVersionId = null;
}
