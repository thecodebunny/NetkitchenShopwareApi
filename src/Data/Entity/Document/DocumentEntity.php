<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Document;

use Thecodebunny\ShopwareApi\Data\Entity\DocumentType\DocumentTypeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Order\OrderEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentEntity extends Entity
{
    public ?string $documentTypeId = null;

    public ?string $fileType = null;

    public ?string $referencedDocumentId = null;

    public ?string $orderId = null;

    public ?string $documentMediaFileId = null;

    public ?string $orderVersionId = null;

    public ?array $config = null;

    public ?bool $sent = null;

    public ?bool $static = null;

    public ?string $deepLinkCode = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?OrderEntity $order = null;

    public ?DocumentEntity $referencedDocument = null;

    public ?DocumentCollection $dependentDocuments = null;

    public ?MediaEntity $documentMediaFile = null;
}
