<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel;

use Thecodebunny\ShopwareApi\Data\Entity\DocumentType\DocumentTypeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\DocumentBaseConfig\DocumentBaseConfigEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
