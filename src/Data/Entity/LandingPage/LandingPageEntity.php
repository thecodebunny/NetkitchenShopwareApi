<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\LandingPage;

use Netktichen\ShopwareApi\Data\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagCollection;
use Netktichen\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageEntity extends Entity
{
    public ?bool $active = null;

    public ?string $name = null;

    public ?array $slotConfig = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $keywords = null;

    public ?string $url = null;

    public ?LandingPageTranslationCollection $translations = null;

    public ?TagCollection $tags = null;

    public ?string $cmsPageId = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?string $cmsPageVersionId = null;
}
