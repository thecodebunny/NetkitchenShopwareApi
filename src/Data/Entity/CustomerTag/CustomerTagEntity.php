<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomerTag;

use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
