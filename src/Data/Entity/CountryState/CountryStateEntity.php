<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CountryState;

use TheCodeBunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CustomerAddress\CustomerAddressCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
