<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NewsletterRecipient;

use Netktichen\ShopwareApi\Data\Entity\Tag\TagCollection;
use Netktichen\ShopwareApi\Data\Entity\Salutation\SalutationEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NewsletterRecipientEntity extends Entity
{
    public ?string $email = null;

    public ?string $title = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $zipCode = null;

    public ?string $city = null;

    public ?string $street = null;

    public ?string $status = null;

    public ?string $hash = null;

    public ?\DateTimeInterface$confirmedAt = null;

    public ?TagCollection $tags = null;

    public ?string $salutationId = null;

    public ?SalutationEntity $salutation = null;

    public ?string $languageId = null;

    public ?LanguageEntity $language = null;

    public ?string $salesChannelId = null;

    public ?SalesChannelEntity $salesChannel = null;
}
