<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\DocumentBaseConfig;

use TheCodeBunny\ShopwareApi\Data\Entity\DocumentType\DocumentTypeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentBaseConfigEntity extends Entity
{
    public ?string $documentTypeId = null;

    public ?string $logoId = null;

    public ?string $name = null;

    public ?string $filenamePrefix = null;

    public ?string $filenameSuffix = null;

    public ?bool $global = null;

    public ?string $documentNumber = null;

    public ?array $config = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?MediaEntity $logo = null;

    public ?DocumentBaseConfigSalesChannelCollection $salesChannels = null;
}
