<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\DeliveryTime;

use TheCodeBunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeEntity extends Entity
{
    public ?string $name = null;

    public ?int $min = null;

    public ?int $max = null;

    public ?string $unit = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?ProductCollection $products = null;

    public ?DeliveryTimeTranslationCollection $translations = null;
}
