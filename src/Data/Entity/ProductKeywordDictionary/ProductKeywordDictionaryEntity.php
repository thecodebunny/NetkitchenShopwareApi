<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductKeywordDictionary;

use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
