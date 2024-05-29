<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductCustomFieldSet;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCustomFieldSetEntity extends Entity
{
    public ?string $productId = null;

    public ?string $customFieldSetId = null;

    public ?string $productVersionId = null;

    public ?ProductEntity $product = null;

    public ?CustomFieldSetEntity $customFieldSet = null;
}
