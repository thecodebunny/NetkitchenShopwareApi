<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ThemeSalesChannel;

use Netktichen\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
