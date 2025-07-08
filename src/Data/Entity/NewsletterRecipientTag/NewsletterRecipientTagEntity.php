<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipientTag;

use Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
