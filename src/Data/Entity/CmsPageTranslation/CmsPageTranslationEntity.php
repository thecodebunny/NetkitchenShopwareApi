<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CmsPageTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $cmsPageId = null;

    public ?string $languageId = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?LanguageEntity $language = null;

    public ?string $cmsPageVersionId = null;
}
