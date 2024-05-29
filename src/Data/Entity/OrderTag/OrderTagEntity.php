<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\OrderTag;

use Thecodebunny\ShopwareApi\Data\Entity\Order\OrderEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
