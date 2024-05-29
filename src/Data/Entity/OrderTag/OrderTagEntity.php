<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\OrderTag;

use TheCodeBunny\ShopwareApi\Data\Entity\Order\OrderEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTagEntity extends Entity
{
    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $tagId = null;

    public ?OrderEntity $order = null;

    public ?TagEntity $tag = null;
}
