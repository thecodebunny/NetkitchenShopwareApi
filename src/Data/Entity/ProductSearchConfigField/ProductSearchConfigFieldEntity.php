<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductSearchConfigField;

use Thecodebunny\ShopwareApi\Data\Entity\ProductSearchConfig\ProductSearchConfigEntity;
use Thecodebunny\ShopwareApi\Data\Entity\CustomField\CustomFieldEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchConfigFieldEntity extends Entity
{
    public ?string $searchConfigId = null;

    public ?string $customFieldId = null;

    public ?string $field = null;

    public ?bool $tokenize = null;

    public ?bool $searchable = null;

    public ?int $ranking = null;

    public ?ProductSearchConfigEntity $searchConfig = null;

    public ?CustomFieldEntity $customField = null;
}
