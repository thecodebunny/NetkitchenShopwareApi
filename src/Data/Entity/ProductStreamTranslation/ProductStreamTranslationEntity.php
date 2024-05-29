<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductStreamTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\ProductStream\ProductStreamEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $productStreamId = null;

    public ?string $languageId = null;

    public ?ProductStreamEntity $productStream = null;

    public ?LanguageEntity $language = null;
}
