<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppCmsBlockTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\AppCmsBlock\AppCmsBlockEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppCmsBlockTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $appCmsBlockId = null;

    public ?string $languageId = null;

    public ?AppCmsBlockEntity $appCmsBlock = null;

    public ?LanguageEntity $language = null;
}
