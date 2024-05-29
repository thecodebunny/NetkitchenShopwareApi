<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Order;

use TheCodeBunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderCustomer\OrderCustomerEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Document\DocumentCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Tag\TagCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\User\UserEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderEntity extends Entity
{
    public ?int $autoIncrement = null;

    public ?string $orderNumber = null;

    public ?string $billingAddressId = null;

    public ?string $billingAddressVersionId = null;

    public ?string $currencyId = null;

    public ?string $languageId = null;

    public ?string $salesChannelId = null;

    public ?\DateTimeInterface$orderDateTime = null;

    public ?\DateTimeInterface$orderDate = null;

    public ?array $price = null;

    public ?float $amountTotal = null;

    public ?float $amountNet = null;

    public ?float $positionPrice = null;

    public ?string $taxStatus = null;

    public ?array $shippingCosts = null;

    public ?float $shippingTotal = null;

    public ?float $currencyFactor = null;

    public ?string $deepLinkCode = null;

    public ?string $affiliateCode = null;

    public ?string $campaignCode = null;

    public ?string $customerComment = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?array $ruleIds = null;

    public ?string $createdById = null;

    public ?string $updatedById = null;

    public ?OrderCustomerEntity $orderCustomer = null;

    public ?CurrencyEntity $currency = null;

    public ?LanguageEntity $language = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?OrderAddressCollection $addresses = null;

    public ?OrderAddressEntity $billingAddress = null;

    public ?OrderDeliveryCollection $deliveries = null;

    public ?OrderLineItemCollection $lineItems = null;

    public ?OrderTransactionCollection $transactions = null;

    public ?DocumentCollection $documents = null;

    public ?TagCollection $tags = null;

    public ?UserEntity $createdBy = null;

    public ?UserEntity $updatedBy = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;
}
