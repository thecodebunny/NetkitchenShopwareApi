<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\IntegrationRole;

use Netktichen\ShopwareApi\Data\Entity\EntityDefinition;
use Netktichen\ShopwareApi\Data\Schema\PropertyCollection;
use Netktichen\ShopwareApi\Data\Schema\FlagCollection;
use Netktichen\ShopwareApi\Data\Schema\Property;
use Netktichen\ShopwareApi\Data\Schema\Flag;
use Netktichen\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationRoleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'integration_role';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return IntegrationRoleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return IntegrationRoleCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('integration_role', new PropertyCollection([
            new Property('integrationId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('aclRoleId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('integration', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'integration', 'referenceField' => 'id', 'localField' => 'integrationId', 'relation' => 'many_to_one', ]),
            new Property('role', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'acl_role', 'referenceField' => 'id', 'localField' => 'aclRoleId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
