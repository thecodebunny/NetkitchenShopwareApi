<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductMedia;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductMediaEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $mediaId = null;

    public ?int $position = null;

    public ?ProductEntity $product = null;

    public ?MediaEntity $media = null;

    public ?ProductCollection $coverProducts = null;
}
