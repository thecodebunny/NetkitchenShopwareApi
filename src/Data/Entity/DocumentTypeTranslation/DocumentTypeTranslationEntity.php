<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\DocumentTypeTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\DocumentType\DocumentTypeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
