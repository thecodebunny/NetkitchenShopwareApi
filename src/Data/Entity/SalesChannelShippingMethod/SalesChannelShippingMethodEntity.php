<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SalesChannelShippingMethod;

use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelShippingMethodEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $shippingMethodId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?ShippingMethodEntity $shippingMethod = null;
}
