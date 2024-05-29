<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\OrderCustomer;

use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Salutation\SalutationEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderCustomerEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $email = null;

    public ?string $salutationId = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $company = null;

    public ?string $title = null;

    public ?array $vatIds = null;

    public ?string $customerNumber = null;

    public ?OrderEntity $order = null;

    public ?CustomerEntity $customer = null;

    public ?SalutationEntity $salutation = null;

    /**
     * @var mixed
     */
    public $remoteAddress = null;
}
