<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductManufacturer;

use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerEntity extends Entity
{
    public ?string $mediaId = null;

    public ?string $link = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?MediaEntity $media = null;

    public ?ProductCollection $products = null;

    public ?ProductManufacturerTranslationCollection $translations = null;
}
