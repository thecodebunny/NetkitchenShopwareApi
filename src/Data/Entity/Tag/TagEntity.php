<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Tag;

use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Category\CategoryCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\LandingPage\LandingPageCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TagEntity extends Entity
{
    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?MediaCollection $media = null;

    public ?CategoryCollection $categories = null;

    public ?CustomerCollection $customers = null;

    public ?OrderCollection $orders = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?LandingPageCollection $landingPages = null;

    public ?RuleCollection $rules = null;
}
