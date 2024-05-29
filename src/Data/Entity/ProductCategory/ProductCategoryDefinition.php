<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductCategory;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityDefinition;
use TheCodeBunny\ShopwareApi\Data\Schema\PropertyCollection;
use TheCodeBunny\ShopwareApi\Data\Schema\FlagCollection;
use TheCodeBunny\ShopwareApi\Data\Schema\Property;
use TheCodeBunny\ShopwareApi\Data\Schema\Flag;
use TheCodeBunny\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCategoryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_category';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductCategoryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductCategoryCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('product_category', new PropertyCollection([
            new Property('productId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('productVersionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('categoryId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('categoryVersionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('product', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'product', 'referenceField' => 'id', 'localField' => 'productId', 'relation' => 'many_to_one', ]),
            new Property('category', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'category', 'referenceField' => 'id', 'localField' => 'categoryId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
