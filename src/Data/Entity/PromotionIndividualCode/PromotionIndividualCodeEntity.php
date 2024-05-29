<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PromotionIndividualCode;

use Thecodebunny\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionIndividualCodeEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $code = null;

    public ?array $payload = null;

    public ?PromotionEntity $promotion = null;
}
