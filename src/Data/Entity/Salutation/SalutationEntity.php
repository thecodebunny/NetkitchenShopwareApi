<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Salutation;

use Thecodebunny\ShopwareApi\Data\Entity\SalutationTranslation\SalutationTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CustomerAddress\CustomerAddressCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderCustomer\OrderCustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalutationEntity extends Entity
{
    public ?string $salutationKey = null;

    public ?string $displayName = null;

    public ?string $letterName = null;

    public ?SalutationTranslationCollection $translations = null;

    public ?CustomerCollection $customers = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?OrderCustomerCollection $orderCustomers = null;

    public ?OrderAddressCollection $orderAddresses = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;
}
