<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NumberRange;

use Netktichen\ShopwareApi\Data\Entity\NumberRangeType\NumberRangeTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeState\NumberRangeStateEntity;
use Netktichen\ShopwareApi\Data\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeEntity extends Entity
{
    public ?string $typeId = null;

    public ?bool $global = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?string $pattern = null;

    public ?int $start = null;

    public ?NumberRangeTypeEntity $type = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?NumberRangeStateEntity $state = null;

    public ?NumberRangeTranslationCollection $translations = null;
}
