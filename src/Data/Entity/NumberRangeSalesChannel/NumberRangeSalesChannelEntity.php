<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NumberRangeSalesChannel;

use Netktichen\ShopwareApi\Data\Entity\NumberRange\NumberRangeEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeType\NumberRangeTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeSalesChannelEntity extends Entity
{
    public ?string $numberRangeId = null;

    public ?string $salesChannelId = null;

    public ?string $numberRangeTypeId = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?NumberRangeTypeEntity $numberRangeType = null;
}
