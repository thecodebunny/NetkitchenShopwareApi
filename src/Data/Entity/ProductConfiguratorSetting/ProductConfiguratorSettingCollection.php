<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductConfiguratorSetting;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductConfiguratorSettingEntity $entity)
 * @method void set(ProductConfiguratorSettingEntity $entity)
 * @method ProductConfiguratorSettingEntity[] getIterator()
 * @method ProductConfiguratorSettingEntity[] getElements()
 * @method ProductConfiguratorSettingEntity|null get(string $key)
 * @method ProductConfiguratorSettingEntity|null first()
 * @method ProductConfiguratorSettingEntity|null last()
 */
class ProductConfiguratorSettingCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductConfiguratorSettingEntity::class;
    }
}
