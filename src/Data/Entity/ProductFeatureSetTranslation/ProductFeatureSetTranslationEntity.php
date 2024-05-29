<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductFeatureSetTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\ProductFeatureSet\ProductFeatureSetEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $productFeatureSetId = null;

    public ?string $languageId = null;

    public ?ProductFeatureSetEntity $productFeatureSet = null;

    public ?LanguageEntity $language = null;
}
