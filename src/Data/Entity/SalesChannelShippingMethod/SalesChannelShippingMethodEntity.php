<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\SalesChannelShippingMethod;

use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
