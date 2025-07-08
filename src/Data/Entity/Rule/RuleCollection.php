<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Rule;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(RuleEntity $entity)
 * @method void set(RuleEntity $entity)
 * @method RuleEntity[] getIterator()
 * @method RuleEntity[] getElements()
 * @method RuleEntity|null get(string $key)
 * @method RuleEntity|null first()
 * @method RuleEntity|null last()
 */
class RuleCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return RuleEntity::class;
    }
}
