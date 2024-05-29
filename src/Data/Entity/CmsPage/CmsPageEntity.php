<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CmsPage;

use TheCodeBunny\ShopwareApi\Data\Entity\CmsSection\CmsSectionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CmsPageTranslation\CmsPageTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Category\CategoryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\LandingPage\LandingPageCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageEntity extends Entity
{
    public ?string $name = null;

    public ?string $type = null;

    public ?string $entity = null;

    public ?string $cssClass = null;

    public ?array $config = null;

    public ?string $previewMediaId = null;

    public ?bool $locked = null;

    public ?CmsSectionCollection $sections = null;

    public ?CmsPageTranslationCollection $translations = null;

    public ?MediaEntity $previewMedia = null;

    public ?CategoryCollection $categories = null;

    public ?LandingPageCollection $landingPages = null;

    public ?SalesChannelCollection $homeSalesChannels = null;

    public ?ProductCollection $products = null;
}
