<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SalesChannelPaymentMethod;

use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
