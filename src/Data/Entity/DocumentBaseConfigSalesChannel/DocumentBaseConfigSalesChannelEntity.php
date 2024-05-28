<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel;

use Netktichen\ShopwareApi\Data\Entity\DocumentType\DocumentTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\DocumentBaseConfig\DocumentBaseConfigEntity;
use Netktichen\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentBaseConfigSalesChannelEntity extends Entity
{
    public ?string $documentBaseConfigId = null;

    public ?string $salesChannelId = null;

    public ?string $documentTypeId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?DocumentBaseConfigEntity $documentBaseConfig = null;

    public ?SalesChannelEntity $salesChannel = null;
}
