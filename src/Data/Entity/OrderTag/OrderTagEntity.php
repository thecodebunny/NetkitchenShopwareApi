<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderTag;

use Netktichen\ShopwareApi\Data\Entity\Order\OrderEntity;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
