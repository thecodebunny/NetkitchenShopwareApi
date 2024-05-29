<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomFieldSet;

use TheCodeBunny\ShopwareApi\Data\Entity\CustomFieldSetRelation\CustomFieldSetRelationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\App\AppEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetEntity extends Entity
{
    public ?string $name = null;

    public ?array $config = null;

    public ?bool $active = null;

    public ?bool $global = null;

    public ?int $position = null;

    public ?string $appId = null;

    public ?CustomFieldSetRelationCollection $relations = null;

    public ?ProductCollection $products = null;

    public ?AppEntity $app = null;
}
