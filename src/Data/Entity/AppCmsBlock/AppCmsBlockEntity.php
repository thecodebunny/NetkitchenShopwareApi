<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\AppCmsBlock;

use Netktichen\ShopwareApi\Data\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\App\AppEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppCmsBlockEntity extends Entity
{
    public ?string $name = null;

    public ?array $block = null;

    public ?string $template = null;

    public ?string $styles = null;

    public ?string $label = null;

    public ?AppCmsBlockTranslationCollection $translations = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}