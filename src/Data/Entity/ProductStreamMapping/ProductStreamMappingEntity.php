<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ProductStreamMapping;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductStream\ProductStreamEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamMappingEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $productStreamId = null;

    public ?ProductEntity $product = null;

    public ?ProductStreamEntity $productStream = null;
}
