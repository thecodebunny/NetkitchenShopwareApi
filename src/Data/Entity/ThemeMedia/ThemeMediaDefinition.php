<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ThemeMedia;

use Netktichen\ShopwareApi\Data\Entity\EntityDefinition;
use Netktichen\ShopwareApi\Data\Schema\PropertyCollection;
use Netktichen\ShopwareApi\Data\Schema\FlagCollection;
use Netktichen\ShopwareApi\Data\Schema\Property;
use Netktichen\ShopwareApi\Data\Schema\Flag;
use Netktichen\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeMediaDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'theme_media';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ThemeMediaEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ThemeMediaCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('theme_media', new PropertyCollection([
            new Property('themeId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('mediaId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('theme', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'theme', 'referenceField' => 'id', 'localField' => 'themeId', 'relation' => 'many_to_one', ]),
            new Property('media', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'media', 'referenceField' => 'id', 'localField' => 'mediaId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
