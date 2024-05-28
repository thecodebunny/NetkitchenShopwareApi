<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductManufacturerTranslation;

use Netktichen\ShopwareApi\Data\Entity\ProductManufacturer\ProductManufacturerEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $productManufacturerId = null;

    public ?string $languageId = null;

    public ?ProductManufacturerEntity $productManufacturer = null;

    public ?LanguageEntity $language = null;

    public ?string $productManufacturerVersionId = null;
}
