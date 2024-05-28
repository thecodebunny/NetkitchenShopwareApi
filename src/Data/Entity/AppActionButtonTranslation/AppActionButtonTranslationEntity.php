<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\AppActionButtonTranslation;

use Netktichen\ShopwareApi\Data\Entity\AppActionButton\AppActionButtonEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppActionButtonTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $appActionButtonId = null;

    public ?string $languageId = null;

    public ?AppActionButtonEntity $appActionButton = null;

    public ?LanguageEntity $language = null;
}
