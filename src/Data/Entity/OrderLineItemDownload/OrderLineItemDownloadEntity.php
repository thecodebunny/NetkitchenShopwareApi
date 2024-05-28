<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\OrderLineItemDownload;

use Netktichen\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemEntity;
use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderLineItemDownloadEntity extends Entity
{
    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?string $mediaId = null;

    public ?int $position = null;

    public ?bool $accessGranted = null;

    public ?OrderLineItemEntity $orderLineItem = null;

    public ?MediaEntity $media = null;
}
