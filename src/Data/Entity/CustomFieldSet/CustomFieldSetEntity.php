<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomFieldSet;

use Netktichen\ShopwareApi\Data\Entity\CustomFieldSetRelation\CustomFieldSetRelationCollection;
use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Entity\App\AppEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
