<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ThemeSalesChannel;

use TheCodeBunny\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeSalesChannelEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $themeId = null;

    public ?ThemeEntity $theme = null;

    public ?SalesChannelEntity $salesChannel = null;
}
