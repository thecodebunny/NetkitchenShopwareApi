<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipient;

use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Salutation\SalutationEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
