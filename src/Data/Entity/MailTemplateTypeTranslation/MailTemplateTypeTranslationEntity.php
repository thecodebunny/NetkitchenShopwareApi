<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateTypeTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateType\MailTemplateTypeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $mailTemplateTypeId = null;

    public ?string $languageId = null;

    public ?MailTemplateTypeEntity $mailTemplateType = null;

    public ?LanguageEntity $language = null;
}
