<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannelCountry;

use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
