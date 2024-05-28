<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CategoryTag;

use Netktichen\ShopwareApi\Data\Entity\Category\CategoryEntity;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryTagEntity extends Entity
{
    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?string $tagId = null;

    public ?CategoryEntity $category = null;

    public ?TagEntity $tag = null;
}
