<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MailTemplateTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MailTemplateTranslationEntity $entity)
 * @method void set(MailTemplateTranslationEntity $entity)
 * @method MailTemplateTranslationEntity[] getIterator()
 * @method MailTemplateTranslationEntity[] getElements()
 * @method MailTemplateTranslationEntity|null get(string $key)
 * @method MailTemplateTranslationEntity|null first()
 * @method MailTemplateTranslationEntity|null last()
 */
class MailTemplateTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MailTemplateTranslationEntity::class;
    }
}
