<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\SalesChannelPaymentMethod;

use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelPaymentMethodEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $paymentMethodId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?PaymentMethodEntity $paymentMethod = null;
}
