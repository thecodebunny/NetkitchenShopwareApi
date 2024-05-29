<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\AppScriptCondition;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppScriptConditionEntity $entity)
 * @method void set(AppScriptConditionEntity $entity)
 * @method AppScriptConditionEntity[] getIterator()
 * @method AppScriptConditionEntity[] getElements()
 * @method AppScriptConditionEntity|null get(string $key)
 * @method AppScriptConditionEntity|null first()
 * @method AppScriptConditionEntity|null last()
 */
class AppScriptConditionCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AppScriptConditionEntity::class;
    }
}
