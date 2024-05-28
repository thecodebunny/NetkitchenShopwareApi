<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\PromotionPersonaCustomer;

use Netktichen\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionPersonaCustomerEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $customerId = null;

    public ?PromotionEntity $promotion = null;

    public ?CustomerEntity $customer = null;
}
