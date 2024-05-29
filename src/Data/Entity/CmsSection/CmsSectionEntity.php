<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CmsSection;

use TheCodeBunny\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\CmsBlock\CmsBlockCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSectionEntity extends Entity
{
    public ?int $position = null;

    public ?string $type = null;

    public ?bool $locked = null;

    public ?string $name = null;

    public ?string $sizingMode = null;

    public ?string $mobileBehavior = null;

    public ?string $backgroundColor = null;

    public ?string $backgroundMediaId = null;

    public ?string $backgroundMediaMode = null;

    public ?string $cssClass = null;

    public ?string $pageId = null;

    public ?array $visibility = null;

    public ?CmsPageEntity $page = null;

    public ?MediaEntity $backgroundMedia = null;

    public ?CmsBlockCollection $blocks = null;

    public ?string $cmsPageVersionId = null;
}
