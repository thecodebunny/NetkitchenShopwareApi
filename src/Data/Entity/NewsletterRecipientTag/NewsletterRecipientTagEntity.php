<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\NewsletterRecipientTag;

use TheCodeBunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
