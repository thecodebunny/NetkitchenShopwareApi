<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Order;

use Thecodebunny\ShopwareApi\Data\Entity\StateMachineState\StateMachineStateEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderCustomer\OrderCustomerEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderAddress\OrderAddressEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Document\DocumentCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagCollection;
use Thecodebunny\ShopwareApi\Data\Entity\User\UserEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
