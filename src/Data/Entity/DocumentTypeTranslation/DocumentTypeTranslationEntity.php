<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\DocumentTypeTranslation;

use Netktichen\ShopwareApi\Data\Entity\DocumentType\DocumentTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $documentTypeId = null;

    public ?string $languageId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?LanguageEntity $language = null;
}
