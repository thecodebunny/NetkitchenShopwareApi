<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ImportExportFile;

use TheCodeBunny\ShopwareApi\Data\Entity\ImportExportLog\ImportExportLogEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportFileEntity extends Entity
{
    public ?string $originalName = null;

    public ?string $path = null;

    public ?\DateTimeInterface$expireDate = null;

    public ?int $size = null;

    public ?ImportExportLogEntity $log = null;

    public ?string $accessToken = null;
}
