<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ImportExportProfileTranslation;

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
class ImportExportProfileTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'import_export_profile_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ImportExportProfileTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ImportExportProfileTranslationCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('import_export_profile_translation', new PropertyCollection([
            new Property('label', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), []),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
            new Property('importExportProfileId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('languageId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('importExportProfile', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'import_export_profile', 'referenceField' => 'id', 'localField' => 'importExportProfileId', 'relation' => 'many_to_one', ]),
            new Property('language', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'language', 'referenceField' => 'id', 'localField' => 'languageId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
