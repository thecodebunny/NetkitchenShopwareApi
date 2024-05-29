<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LandingPageTag;

use Thecodebunny\ShopwareApi\Data\Entity\LandingPage\LandingPageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageTagEntity extends Entity
{
    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?string $tagId = null;

    public ?LandingPageEntity $landingPage = null;

    public ?TagEntity $tag = null;
}
