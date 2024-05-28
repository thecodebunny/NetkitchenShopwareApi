<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MailTemplateMedia;

use Netktichen\ShopwareApi\Data\Entity\MailTemplate\MailTemplateEntity;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
