<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductStreamFilter;

use Thecodebunny\ShopwareApi\Data\Entity\ProductStream\ProductStreamEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamFilterEntity extends Entity
{
    public ?string $productStreamId = null;

    public ?string $parentId = null;

    public ?string $type = null;

    public ?string $field = null;

    public ?string $operator = null;

    public ?string $value = null;

    public ?array $parameters = null;

    public ?int $position = null;

    public ?ProductStreamEntity $productStream = null;

    public ?ProductStreamFilterEntity $parent = null;

    public ?ProductStreamFilterCollection $queries = null;
}
