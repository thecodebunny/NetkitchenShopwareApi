<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\LandingPageTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\LandingPage\LandingPageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $url = null;

    public ?array $slotConfig = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $keywords = null;

    public ?string $landingPageId = null;

    public ?string $languageId = null;

    public ?LandingPageEntity $landingPage = null;

    public ?LanguageEntity $language = null;

    public ?string $landingPageVersionId = null;
}
