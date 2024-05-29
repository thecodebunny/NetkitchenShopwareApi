<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MailTemplateMedia;

use TheCodeBunny\ShopwareApi\Data\Entity\MailTemplate\MailTemplateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateMediaEntity extends Entity
{
    public ?string $mailTemplateId = null;

    public ?string $languageId = null;

    public ?string $mediaId = null;

    public ?int $position = null;

    public ?MailTemplateEntity $mailTemplate = null;

    public ?MediaEntity $media = null;
}
