<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\MailTemplateMedia;

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
class MailTemplateMediaDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'mail_template_media';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MailTemplateMediaEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MailTemplateMediaCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('mail_template_media', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('mailTemplateId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('languageId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('mediaId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('position', 'int', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
            new Property('mailTemplate', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'mail_template', 'referenceField' => 'id', 'localField' => 'mailTemplateId', 'relation' => 'many_to_one', ]),
            new Property('media', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), ['entity' => 'media', 'referenceField' => 'id', 'localField' => 'mediaId', 'relation' => 'many_to_one', ]),
        ]));
    }
}
