<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderAddress;

use Netktichen\ShopwareApi\Data\Entity\Country\CountryEntity;
use Netktichen\ShopwareApi\Data\Entity\CountryState\CountryStateEntity;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderEntity;
use Netktichen\ShopwareApi\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use Netktichen\ShopwareApi\Data\Entity\Salutation\SalutationEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderAddressEntity extends Entity
{
    public ?string $countryId = null;

    public ?string $countryStateId = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $salutationId = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $street = null;

    public ?string $zipcode = null;

    public ?string $city = null;

    public ?string $company = null;

    public ?string $department = null;

    public ?string $title = null;

    public ?string $vatId = null;

    public ?string $phoneNumber = null;

    public ?string $additionalAddressLine1 = null;

    public ?string $additionalAddressLine2 = null;

    public ?CountryEntity $country = null;

    public ?CountryStateEntity $countryState = null;

    public ?OrderEntity $order = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?SalutationEntity $salutation = null;
}
