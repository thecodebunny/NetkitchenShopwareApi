<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CustomFieldSetRelation;

use TheCodeBunny\ShopwareApi\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetRelationEntity extends Entity
{
    public ?string $customFieldSetId = null;

    public ?string $entityName = null;

    public ?CustomFieldSetEntity $customFieldSet = null;
}
