<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CustomerGroupRegistrationSalesChannels;

use Thecodebunny\ShopwareApi\Data\Entity\CustomerGroup\CustomerGroupEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
