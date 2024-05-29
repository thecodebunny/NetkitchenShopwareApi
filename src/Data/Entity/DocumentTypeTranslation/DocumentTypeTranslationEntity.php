<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\DocumentTypeTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\DocumentType\DocumentTypeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
