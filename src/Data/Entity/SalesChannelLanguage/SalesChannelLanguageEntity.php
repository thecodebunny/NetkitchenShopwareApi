<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SalesChannelLanguage;

use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelLanguageEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;
}
