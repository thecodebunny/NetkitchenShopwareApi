<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Tag;

use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaCollection;
use Netktichen\ShopwareApi\Data\Entity\Category\CategoryCollection;
use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Netktichen\ShopwareApi\Data\Entity\Order\OrderCollection;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Netktichen\ShopwareApi\Data\Entity\LandingPage\LandingPageCollection;
use Netktichen\ShopwareApi\Data\Entity\Rule\RuleCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
