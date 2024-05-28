<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\IntegrationRole;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(IntegrationRoleEntity $entity)
 * @method void set(IntegrationRoleEntity $entity)
 * @method IntegrationRoleEntity[] getIterator()
 * @method IntegrationRoleEntity[] getElements()
 * @method IntegrationRoleEntity|null get(string $key)
 * @method IntegrationRoleEntity|null first()
 * @method IntegrationRoleEntity|null last()
 */
class IntegrationRoleCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return IntegrationRoleEntity::class;
    }
}
