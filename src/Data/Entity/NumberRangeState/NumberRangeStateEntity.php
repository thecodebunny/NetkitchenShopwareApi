<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NumberRangeState;

use Netktichen\ShopwareApi\Data\Entity\NumberRange\NumberRangeEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
