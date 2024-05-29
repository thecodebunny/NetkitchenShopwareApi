<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MailTemplateType;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MailTemplateTypeEntity $entity)
 * @method void set(MailTemplateTypeEntity $entity)
 * @method MailTemplateTypeEntity[] getIterator()
 * @method MailTemplateTypeEntity[] getElements()
 * @method MailTemplateTypeEntity|null get(string $key)
 * @method MailTemplateTypeEntity|null first()
 * @method MailTemplateTypeEntity|null last()
 */
class MailTemplateTypeCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MailTemplateTypeEntity::class;
    }
}
