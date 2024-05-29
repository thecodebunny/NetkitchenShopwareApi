<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\SystemConfig;

use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SystemConfigEntity extends Entity
{
    public ?string $configurationKey = null;

    /**
     * @var mixed
     */
    public $configurationValue = null;

    public ?string $salesChannelId = null;

    public ?SalesChannelEntity $salesChannel = null;
}
