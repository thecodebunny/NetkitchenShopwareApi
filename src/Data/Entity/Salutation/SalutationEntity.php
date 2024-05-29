<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Salutation;

use TheCodeBunny\ShopwareApi\Data\Entity\SalutationTranslation\SalutationTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\CustomerAddress\CustomerAddressCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderCustomer\OrderCustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
