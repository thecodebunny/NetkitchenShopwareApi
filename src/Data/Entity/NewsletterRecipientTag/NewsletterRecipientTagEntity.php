<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NewsletterRecipientTag;

use Netktichen\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientEntity;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NewsletterRecipientTagEntity extends Entity
{
    public ?string $newsletterRecipientId = null;

    public ?string $tagId = null;

    public ?NewsletterRecipientEntity $newsletterRecipient = null;

    public ?TagEntity $tag = null;
}
