<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Tag;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Category\CategoryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Order\OrderCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Thecodebunny\ShopwareApi\Data\Entity\LandingPage\LandingPageCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
