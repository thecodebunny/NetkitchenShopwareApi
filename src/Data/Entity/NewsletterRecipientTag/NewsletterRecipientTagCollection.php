<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\NewsletterRecipientTag;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(NewsletterRecipientTagEntity $entity)
 * @method void set(NewsletterRecipientTagEntity $entity)
 * @method NewsletterRecipientTagEntity[] getIterator()
 * @method NewsletterRecipientTagEntity[] getElements()
 * @method NewsletterRecipientTagEntity|null get(string $key)
 * @method NewsletterRecipientTagEntity|null first()
 * @method NewsletterRecipientTagEntity|null last()
 */
class NewsletterRecipientTagCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return NewsletterRecipientTagEntity::class;
    }
}
