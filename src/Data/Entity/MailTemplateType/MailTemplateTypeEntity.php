<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MailTemplateType;

use Netktichen\ShopwareApi\Data\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\MailTemplate\MailTemplateCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
