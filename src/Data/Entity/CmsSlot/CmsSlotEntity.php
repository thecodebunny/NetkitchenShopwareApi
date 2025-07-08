<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CmsSlot;

use Thecodebunny\ShopwareApi\Data\Entity\CmsBlock\CmsBlockEntity;
use Thecodebunny\ShopwareApi\Data\Entity\CmsSlotTranslation\CmsSlotTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotEntity extends Entity
{
    public ?string $type = null;

    public ?string $slot = null;

    public ?bool $locked = null;

    public ?array $config = null;

    public ?array $data = null;

    public ?string $blockId = null;

    public ?CmsBlockEntity $block = null;

    public ?CmsSlotTranslationCollection $translations = null;

    public ?array $fieldConfig = null;

    public ?string $cmsBlockVersionId = null;
}
