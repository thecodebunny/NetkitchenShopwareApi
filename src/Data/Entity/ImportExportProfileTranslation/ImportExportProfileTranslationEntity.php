<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ImportExportProfileTranslation;

use Netktichen\ShopwareApi\Data\Entity\ImportExportProfile\ImportExportProfileEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $importExportProfileId = null;

    public ?string $languageId = null;

    public ?ImportExportProfileEntity $importExportProfile = null;

    public ?LanguageEntity $language = null;
}
