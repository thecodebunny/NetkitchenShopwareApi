<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannelType;

use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTypeEntity extends Entity
{
    public ?string $coverUrl = null;

    public ?string $iconName = null;

    public ?array $screenshotUrls = null;

    public ?string $name = null;

    public ?string $manufacturer = null;

    public ?string $description = null;

    public ?string $descriptionLong = null;

    public ?SalesChannelTypeTranslationCollection $translations = null;

    public ?SalesChannelCollection $salesChannels = null;
}
