<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ShippingMethodTag;

use Thecodebunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTagEntity extends Entity
{
    public ?string $shippingMethodId = null;

    public ?string $tagId = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?TagEntity $tag = null;
}
