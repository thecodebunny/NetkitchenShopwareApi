<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PluginTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\Plugin\PluginEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PluginTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $manufacturerLink = null;

    public ?string $supportLink = null;

    public ?array $changelog = null;

    public ?string $pluginId = null;

    public ?string $languageId = null;

    public ?PluginEntity $plugin = null;

    public ?LanguageEntity $language = null;
}
