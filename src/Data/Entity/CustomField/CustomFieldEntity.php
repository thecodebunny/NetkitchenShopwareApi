<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CustomField;

use Thecodebunny\ShopwareApi\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use Thecodebunny\ShopwareApi\Data\Entity\ProductSearchConfigField\ProductSearchConfigFieldCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldEntity extends Entity
{
    public ?string $name = null;

    public ?string $type = null;

    public ?array $config = null;

    public ?bool $active = null;

    public ?string $customFieldSetId = null;

    public ?bool $allowCustomerWrite = null;

    public ?CustomFieldSetEntity $customFieldSet = null;

    public ?ProductSearchConfigFieldCollection $productSearchConfigFields = null;
}
