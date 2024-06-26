<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Webhook;

use Thecodebunny\ShopwareApi\Data\Struct;
use Thecodebunny\ShopwareApi\Data\Uuid\Uuid;

class Shop extends Struct
{
    protected string $shopId;

    protected string $shopUrl;

    protected string $shopSecret;

    public function __construct(string $shopId, string $shopUrl, ?string $shopSecret = null)
    {
        $this->shopId = $shopId;
        $this->shopUrl = $shopUrl;
        $this->shopSecret = $shopSecret ?? Uuid::randomHex();
    }

    public function getShopUrl(): string
    {
        return $this->shopUrl;
    }

    public function setShopUrl(string $shopUrl): void
    {
        $this->shopUrl = $shopUrl;
    }

    public function getShopId(): string
    {
        return $this->shopId;
    }

    public function setShopId(string $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function getShopSecret(): string
    {
        return $this->shopSecret;
    }

    public function setShopSecret(string $shopSecret): void
    {
        $this->shopSecret = $shopSecret;
    }
}
