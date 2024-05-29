<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\AppActionButton;

use TheCodeBunny\ShopwareApi\Data\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\App\AppEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
