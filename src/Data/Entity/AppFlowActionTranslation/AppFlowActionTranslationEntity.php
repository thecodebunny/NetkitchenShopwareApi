<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\AppFlowActionTranslation;

use Netktichen\ShopwareApi\Data\Entity\AppFlowAction\AppFlowActionEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
