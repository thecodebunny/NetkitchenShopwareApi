<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\FlowTemplate;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(FlowTemplateEntity $entity)
 * @method void set(FlowTemplateEntity $entity)
 * @method FlowTemplateEntity[] getIterator()
 * @method FlowTemplateEntity[] getElements()
 * @method FlowTemplateEntity|null get(string $key)
 * @method FlowTemplateEntity|null first()
 * @method FlowTemplateEntity|null last()
 */
class FlowTemplateCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return FlowTemplateEntity::class;
    }
}
