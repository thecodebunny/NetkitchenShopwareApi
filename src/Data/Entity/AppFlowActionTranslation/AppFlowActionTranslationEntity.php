<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\AppFlowActionTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\AppFlowAction\AppFlowActionEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppFlowActionTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $headline = null;

    public ?string $appFlowActionId = null;

    public ?string $languageId = null;

    public ?AppFlowActionEntity $appFlowAction = null;

    public ?LanguageEntity $language = null;
}
