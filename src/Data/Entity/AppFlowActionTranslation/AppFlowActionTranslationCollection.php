<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppFlowActionTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppFlowActionTranslationEntity $entity)
 * @method void set(AppFlowActionTranslationEntity $entity)
 * @method AppFlowActionTranslationEntity[] getIterator()
 * @method AppFlowActionTranslationEntity[] getElements()
 * @method AppFlowActionTranslationEntity|null get(string $key)
 * @method AppFlowActionTranslationEntity|null first()
 * @method AppFlowActionTranslationEntity|null last()
 */
class AppFlowActionTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AppFlowActionTranslationEntity::class;
    }
}
