<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\LandingPageSalesChannel;

use Netktichen\ShopwareApi\Data\Entity\LandingPage\LandingPageEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageSalesChannelEntity extends Entity
{
    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?string $salesChannelId = null;

    public ?LandingPageEntity $landingPage = null;

    public ?SalesChannelEntity $salesChannel = null;
}