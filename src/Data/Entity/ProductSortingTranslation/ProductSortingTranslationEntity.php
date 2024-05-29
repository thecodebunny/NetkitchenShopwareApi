<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductSortingTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\ProductSorting\ProductSortingEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $productSortingId = null;

    public ?string $languageId = null;

    public ?ProductSortingEntity $productSorting = null;

    public ?LanguageEntity $language = null;
}
