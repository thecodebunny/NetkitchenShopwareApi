<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\DocumentType;

use Netktichen\ShopwareApi\Data\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Document\DocumentCollection;
use Netktichen\ShopwareApi\Data\Entity\DocumentBaseConfig\DocumentBaseConfigCollection;
use Netktichen\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeEntity extends Entity
{
    public ?string $name = null;

    public ?string $technicalName = null;

    public ?DocumentTypeTranslationCollection $translations = null;

    public ?DocumentCollection $documents = null;

    public ?DocumentBaseConfigCollection $documentBaseConfigs = null;

    public ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels = null;
}
