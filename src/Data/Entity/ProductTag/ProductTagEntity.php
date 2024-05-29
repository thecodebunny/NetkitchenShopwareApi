<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductTag;

use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTagEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $tagId = null;

    public ?ProductEntity $product = null;

    public ?TagEntity $tag = null;
}
