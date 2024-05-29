<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\UserConfig;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(UserConfigEntity $entity)
 * @method void set(UserConfigEntity $entity)
 * @method UserConfigEntity[] getIterator()
 * @method UserConfigEntity[] getElements()
 * @method UserConfigEntity|null get(string $key)
 * @method UserConfigEntity|null first()
 * @method UserConfigEntity|null last()
 */
class UserConfigCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return UserConfigEntity::class;
    }
}
