<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MediaDefaultFolder;

use Thecodebunny\ShopwareApi\Data\Entity\EntityDefinition;
use Thecodebunny\ShopwareApi\Data\Schema\PropertyCollection;
use Thecodebunny\ShopwareApi\Data\Schema\FlagCollection;
use Thecodebunny\ShopwareApi\Data\Schema\Property;
use Thecodebunny\ShopwareApi\Data\Schema\Flag;
use Thecodebunny\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaDefaultFolderDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_default_folder';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaDefaultFolderEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaDefaultFolderCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('media_default_folder', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('associationFields', 'json_list', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('entity', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), ]), []),
            new Property('folder', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'media_folder', 'referenceField' => 'defaultFolderId', 'localField' => 'id', 'relation' => 'one_to_one', ]),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
