<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannelAnalytics;

use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelAnalyticsEntity extends Entity
{
    public ?string $trackingId = null;

    public ?bool $active = null;

    public ?bool $trackOrders = null;

    public ?bool $anonymizeIp = null;

    public ?SalesChannelEntity $salesChannel = null;
}
