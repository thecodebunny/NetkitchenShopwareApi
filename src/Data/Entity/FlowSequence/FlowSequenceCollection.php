<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\FlowSequence;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(FlowSequenceEntity $entity)
 * @method void set(FlowSequenceEntity $entity)
 * @method FlowSequenceEntity[] getIterator()
 * @method FlowSequenceEntity[] getElements()
 * @method FlowSequenceEntity|null get(string $key)
 * @method FlowSequenceEntity|null first()
 * @method FlowSequenceEntity|null last()
 */
class FlowSequenceCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return FlowSequenceEntity::class;
    }
}
