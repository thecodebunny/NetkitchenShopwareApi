<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\DocumentType;

use Thecodebunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(DocumentTypeEntity $entity)
 * @method void set(DocumentTypeEntity $entity)
 * @method DocumentTypeEntity[] getIterator()
 * @method DocumentTypeEntity[] getElements()
 * @method DocumentTypeEntity|null get(string $key)
 * @method DocumentTypeEntity|null first()
 * @method DocumentTypeEntity|null last()
 */
class DocumentTypeCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return DocumentTypeEntity::class;
    }
}
