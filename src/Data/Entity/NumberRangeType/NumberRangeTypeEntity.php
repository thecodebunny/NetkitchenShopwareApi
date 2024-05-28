<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NumberRangeType;

use Netktichen\ShopwareApi\Data\Entity\NumberRange\NumberRangeCollection;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeEntity extends Entity
{
    public ?string $technicalName = null;

    public ?string $typeName = null;

    public ?bool $global = null;

    public ?NumberRangeCollection $numberRanges = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?NumberRangeTypeTranslationCollection $translations = null;
}
