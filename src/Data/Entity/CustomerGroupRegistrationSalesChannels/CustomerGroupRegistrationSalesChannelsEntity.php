<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomerGroupRegistrationSalesChannels;

use TheCodeBunny\ShopwareApi\Data\Entity\CustomerGroup\CustomerGroupEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupRegistrationSalesChannelsEntity extends Entity
{
    public ?string $customerGroupId = null;

    public ?string $salesChannelId = null;

    public ?CustomerGroupEntity $customerGroup = null;

    public ?SalesChannelEntity $salesChannel = null;
}
