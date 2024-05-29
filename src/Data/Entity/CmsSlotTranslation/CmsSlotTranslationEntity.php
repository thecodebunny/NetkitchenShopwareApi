<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CmsSlotTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\CmsSlot\CmsSlotEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotTranslationEntity extends Entity
{
    public ?array $config = null;

    public ?string $cmsSlotId = null;

    public ?string $languageId = null;

    public ?CmsSlotEntity $cmsSlot = null;

    public ?LanguageEntity $language = null;

    public ?string $cmsSlotVersionId = null;
}
