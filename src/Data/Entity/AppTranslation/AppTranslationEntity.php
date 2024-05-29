<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\AppTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\App\AppEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $privacyPolicyExtensions = null;

    public ?string $appId = null;

    public ?string $languageId = null;

    public ?AppEntity $app = null;

    public ?LanguageEntity $language = null;
}
