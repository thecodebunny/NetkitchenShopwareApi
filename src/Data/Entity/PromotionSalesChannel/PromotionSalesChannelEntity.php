<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PromotionSalesChannel;

use Thecodebunny\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSalesChannelEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $salesChannelId = null;

    public ?int $priority = null;

    public ?PromotionEntity $promotion = null;

    public ?SalesChannelEntity $salesChannel = null;
}
