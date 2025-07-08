<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductKeywordDictionary;

use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductKeywordDictionaryEntity extends Entity
{
    public ?string $languageId = null;

    public ?string $keyword = null;

    public ?string $reversed = null;

    public ?LanguageEntity $language = null;
}
