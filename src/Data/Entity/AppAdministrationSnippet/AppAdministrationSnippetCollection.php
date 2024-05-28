<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\AppAdministrationSnippet;

use Netktichen\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppAdministrationSnippetEntity $entity)
 * @method void set(AppAdministrationSnippetEntity $entity)
 * @method AppAdministrationSnippetEntity[] getIterator()
 * @method AppAdministrationSnippetEntity[] getElements()
 * @method AppAdministrationSnippetEntity|null get(string $key)
 * @method AppAdministrationSnippetEntity|null first()
 * @method AppAdministrationSnippetEntity|null last()
 */
class AppAdministrationSnippetCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AppAdministrationSnippetEntity::class;
    }
}
