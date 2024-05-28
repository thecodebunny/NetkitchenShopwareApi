<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomerTag;

use Netktichen\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerTagEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $tagId = null;

    public ?CustomerEntity $customer = null;

    public ?TagEntity $tag = null;
}
