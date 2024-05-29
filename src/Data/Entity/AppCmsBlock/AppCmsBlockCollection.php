<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppCmsBlock;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppCmsBlockEntity $entity)
 * @method void set(AppCmsBlockEntity $entity)
 * @method AppCmsBlockEntity[] getIterator()
 * @method AppCmsBlockEntity[] getElements()
 * @method AppCmsBlockEntity|null get(string $key)
 * @method AppCmsBlockEntity|null first()
 * @method AppCmsBlockEntity|null last()
 */
class AppCmsBlockCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AppCmsBlockEntity::class;
    }
}
