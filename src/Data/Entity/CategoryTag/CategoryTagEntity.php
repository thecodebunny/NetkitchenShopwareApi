<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CategoryTag;

use Thecodebunny\ShopwareApi\Data\Entity\Category\CategoryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
