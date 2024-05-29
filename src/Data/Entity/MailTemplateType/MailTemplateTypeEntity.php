<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateType;

use TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\MailTemplate\MailTemplateCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeEntity extends Entity
{
    public ?string $name = null;

    public ?string $technicalName = null;

    public ?array $availableEntities = null;

    public ?MailTemplateTypeTranslationCollection $translations = null;

    public ?MailTemplateCollection $mailTemplates = null;

    public ?array $templateData = null;
}
