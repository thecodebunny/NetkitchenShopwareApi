<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ImportExportProfileTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\ImportExportProfile\ImportExportProfileEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
