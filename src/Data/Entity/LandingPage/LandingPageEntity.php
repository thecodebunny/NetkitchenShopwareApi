<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LandingPage;

use Thecodebunny\ShopwareApi\Data\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
