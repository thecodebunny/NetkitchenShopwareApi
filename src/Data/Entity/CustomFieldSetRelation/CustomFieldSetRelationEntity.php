<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\CustomFieldSetRelation;

use Netktichen\ShopwareApi\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
