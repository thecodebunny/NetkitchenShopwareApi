<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CustomerAddress;

use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\CountryState\CountryStateEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Salutation\SalutationEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerAddressEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $countryId = null;

    public ?string $countryStateId = null;

    public ?string $salutationId = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $zipcode = null;

    public ?string $city = null;

    public ?string $company = null;

    public ?string $street = null;

    public ?string $department = null;

    public ?string $title = null;

    public ?string $phoneNumber = null;

    public ?string $additionalAddressLine1 = null;

    public ?string $additionalAddressLine2 = null;

    public ?CustomerEntity $customer = null;

    public ?CountryEntity $country = null;

    public ?CountryStateEntity $countryState = null;

    public ?SalutationEntity $salutation = null;
}
