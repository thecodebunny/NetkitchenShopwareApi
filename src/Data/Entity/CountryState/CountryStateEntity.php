<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CountryState;

use Netktichen\ShopwareApi\Data\Entity\Country\CountryEntity;
use Netktichen\ShopwareApi\Data\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\CustomerAddress\CustomerAddressCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryStateEntity extends Entity
{
    public ?string $countryId = null;

    public ?string $shortCode = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?bool $active = null;

    public ?CountryEntity $country = null;

    public ?CountryStateTranslationCollection $translations = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?OrderAddressCollection $orderAddresses = null;
}
