<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Version;

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
class VersionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'version';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return VersionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return VersionCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('version', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('name', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), new Flag('search_ranking', 500), ]), []),
            new Property('commits', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'version_commit', 'referenceField' => 'versionId', 'localField' => 'id', 'relation' => 'one_to_many', ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
