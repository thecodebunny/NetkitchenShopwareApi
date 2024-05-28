<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductConfiguratorSetting;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductConfiguratorSettingEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $mediaId = null;

    public ?string $optionId = null;

    public ?array $price = null;

    public ?int $position = null;

    public ?ProductEntity $product = null;

    public ?MediaEntity $media = null;

    public ?PropertyGroupOptionEntity $option = null;
}
