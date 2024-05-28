<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\AppActionButton;

use Netktichen\ShopwareApi\Data\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\App\AppEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppActionButtonEntity extends Entity
{
    public ?string $entity = null;

    public ?string $view = null;

    public ?string $url = null;

    public ?string $action = null;

    public ?string $label = null;

    public ?AppActionButtonTranslationCollection $translations = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
