<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Category;

use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\CategoryTranslation\CategoryTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\ProductStream\ProductStreamEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MainCategory\MainCategoryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $parentVersionId = null;

    public ?string $afterCategoryId = null;

    public ?string $afterCategoryVersionId = null;

    public ?string $mediaId = null;

    public ?bool $displayNestedProducts = null;

    public ?int $autoIncrement = null;

    public ?array $breadcrumb = null;

    public ?int $level = null;

    public ?string $path = null;

    public ?int $childCount = null;

    public ?string $type = null;

    public ?string $productAssignmentType = null;

    public ?bool $visible = null;

    public ?bool $active = null;

    public ?bool $cmsPageIdSwitched = null;

    public ?int $visibleChildCount = null;

    public ?string $name = null;

    public ?array $slotConfig = null;

    public ?string $linkType = null;

    public ?string $internalLink = null;

    public ?string $externalLink = null;

    public ?bool $linkNewTab = null;

    public ?string $description = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $keywords = null;

    public ?CategoryEntity $parent = null;

    public ?CategoryCollection $children = null;

    public ?MediaEntity $media = null;

    public ?CategoryTranslationCollection $translations = null;

    public ?ProductCollection $products = null;

    public ?ProductCollection $nestedProducts = null;

    public ?TagCollection $tags = null;

    public ?string $cmsPageId = null;

    public ?string $cmsPageVersionId = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?string $productStreamId = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $customEntityTypeId = null;

    public ?SalesChannelCollection $navigationSalesChannels = null;

    public ?SalesChannelCollection $footerSalesChannels = null;

    public ?SalesChannelCollection $serviceSalesChannels = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?SeoUrlCollection $seoUrls = null;
}
