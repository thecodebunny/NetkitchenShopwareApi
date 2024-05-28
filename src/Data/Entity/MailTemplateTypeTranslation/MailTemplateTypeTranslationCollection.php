<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MailTemplateTypeTranslation;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MailTemplateTypeTranslationEntity $entity)
 * @method void set(MailTemplateTypeTranslationEntity $entity)
 * @method MailTemplateTypeTranslationEntity[] getIterator()
 * @method MailTemplateTypeTranslationEntity[] getElements()
 * @method MailTemplateTypeTranslationEntity|null get(string $key)
 * @method MailTemplateTypeTranslationEntity|null first()
 * @method MailTemplateTypeTranslationEntity|null last()
 */
class MailTemplateTypeTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MailTemplateTypeTranslationEntity::class;
    }
}
