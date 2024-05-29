<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\MailHeaderFooterTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MailHeaderFooterTranslationEntity $entity)
 * @method void set(MailHeaderFooterTranslationEntity $entity)
 * @method MailHeaderFooterTranslationEntity[] getIterator()
 * @method MailHeaderFooterTranslationEntity[] getElements()
 * @method MailHeaderFooterTranslationEntity|null get(string $key)
 * @method MailHeaderFooterTranslationEntity|null first()
 * @method MailHeaderFooterTranslationEntity|null last()
 */
class MailHeaderFooterTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MailHeaderFooterTranslationEntity::class;
    }
}
