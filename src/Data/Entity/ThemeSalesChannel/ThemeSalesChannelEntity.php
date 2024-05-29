<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ThemeSalesChannel;

use Thecodebunny\ShopwareApi\Data\Entity\Theme\ThemeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
