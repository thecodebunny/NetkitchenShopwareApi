<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannelCurrency;

use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCurrencyEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $currencyId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?CurrencyEntity $currency = null;
}
