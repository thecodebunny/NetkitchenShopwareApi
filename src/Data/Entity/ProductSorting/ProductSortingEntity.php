<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductSorting;

use TheCodeBunny\ShopwareApi\Data\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingEntity extends Entity
{
    public ?bool $locked = null;

    public ?string $key = null;

    public ?int $priority = null;

    public ?bool $active = null;

    public ?array $fields = null;

    public ?string $label = null;

    public ?ProductSortingTranslationCollection $translations = null;
}
