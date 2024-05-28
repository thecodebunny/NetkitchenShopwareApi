<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\PropertyGroupOption;

use Netktichen\ShopwareApi\Data\Entity\Media\MediaEntity;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroup\PropertyGroupEntity;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Netktichen\ShopwareApi\Data\Entity\Product\ProductCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupOptionEntity extends Entity
{
    public ?string $groupId = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?string $colorHexCode = null;

    public ?string $mediaId = null;

    public ?MediaEntity $media = null;

    public ?PropertyGroupEntity $group = null;

    public ?PropertyGroupOptionTranslationCollection $translations = null;

    public ?ProductConfiguratorSettingCollection $productConfiguratorSettings = null;

    public ?ProductCollection $productProperties = null;

    public ?ProductCollection $productOptions = null;
}
