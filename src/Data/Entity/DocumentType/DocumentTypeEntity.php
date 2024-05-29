<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\DocumentType;

use TheCodeBunny\ShopwareApi\Data\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Document\DocumentCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\DocumentBaseConfig\DocumentBaseConfigCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
