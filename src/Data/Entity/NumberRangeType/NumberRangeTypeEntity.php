<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\NumberRangeType;

use Thecodebunny\ShopwareApi\Data\Entity\NumberRange\NumberRangeCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
