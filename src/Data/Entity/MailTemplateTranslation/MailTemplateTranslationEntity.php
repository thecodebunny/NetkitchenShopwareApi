<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\MailTemplate\MailTemplateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTranslationEntity extends Entity
{
    public ?string $senderName = null;

    public ?string $description = null;

    public ?string $subject = null;

    public ?string $contentHtml = null;

    public ?string $contentPlain = null;

    public ?string $mailTemplateId = null;

    public ?string $languageId = null;

    public ?MailTemplateEntity $mailTemplate = null;

    public ?LanguageEntity $language = null;
}
