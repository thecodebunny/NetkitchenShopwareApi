<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductStreamTranslation;

use Netktichen\ShopwareApi\Data\Entity\ProductStream\ProductStreamEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
