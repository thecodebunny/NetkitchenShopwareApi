<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MailTemplate;

use Netktichen\ShopwareApi\Data\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\MailTemplateType\MailTemplateTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\MailTemplateMedia\MailTemplateMediaCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateEntity extends Entity
{
    public ?string $mailTemplateTypeId = null;

    public ?bool $systemDefault = null;

    public ?string $senderName = null;

    public ?string $description = null;

    public ?string $subject = null;

    public ?string $contentHtml = null;

    public ?string $contentPlain = null;

    public ?MailTemplateTranslationCollection $translations = null;

    public ?MailTemplateTypeEntity $mailTemplateType = null;

    public ?MailTemplateMediaCollection $media = null;
}
