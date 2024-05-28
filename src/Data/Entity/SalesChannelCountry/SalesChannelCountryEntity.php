<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SalesChannelCountry;

use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\Country\CountryEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCountryEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $countryId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?CountryEntity $country = null;
}
