<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppFlowAction;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppFlowActionEntity $entity)
 * @method void set(AppFlowActionEntity $entity)
 * @method AppFlowActionEntity[] getIterator()
 * @method AppFlowActionEntity[] getElements()
 * @method AppFlowActionEntity|null get(string $key)
 * @method AppFlowActionEntity|null first()
 * @method AppFlowActionEntity|null last()
 */
class AppFlowActionCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AppFlowActionEntity::class;
    }
}
