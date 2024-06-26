<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\OrderLineItem;

use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Order\OrderEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefundPosition\OrderTransactionCaptureRefundPositionCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderLineItemDownload\OrderLineItemDownloadCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderLineItemEntity extends Entity
{
    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $promotionId = null;

    public ?string $parentId = null;

    public ?string $parentVersionId = null;

    public ?string $coverId = null;

    public ?MediaEntity $cover = null;

    public ?string $identifier = null;

    public ?string $referencedId = null;

    public ?int $quantity = null;

    public ?string $label = null;

    public ?array $payload = null;

    public ?bool $good = null;

    public ?bool $removable = null;

    public ?bool $stackable = null;

    public ?int $position = null;

    public ?array $states = null;

    public ?array $price = null;

    public ?array $priceDefinition = null;

    public ?float $unitPrice = null;

    public ?float $totalPrice = null;

    public ?string $description = null;

    public ?string $type = null;

    public ?OrderEntity $order = null;

    public ?ProductEntity $product = null;

    public ?PromotionEntity $promotion = null;

    public ?OrderDeliveryPositionCollection $orderDeliveryPositions = null;

    public ?OrderTransactionCaptureRefundPositionCollection $orderTransactionCaptureRefundPositions = null;

    public ?OrderLineItemDownloadCollection $downloads = null;

    public ?OrderLineItemEntity $parent = null;

    public ?OrderLineItemCollection $children = null;
}
