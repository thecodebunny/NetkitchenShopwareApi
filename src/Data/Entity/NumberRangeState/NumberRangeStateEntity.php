<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\NumberRangeState;

use TheCodeBunny\ShopwareApi\Data\Entity\NumberRange\NumberRangeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeStateEntity extends Entity
{
    public ?string $numberRangeId = null;

    public ?int $lastValue = null;

    public ?NumberRangeEntity $numberRange = null;
}
