<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppScriptConditionTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\AppScriptCondition\AppScriptConditionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppScriptConditionTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $appScriptConditionId = null;

    public ?string $languageId = null;

    public ?AppScriptConditionEntity $appScriptCondition = null;

    public ?LanguageEntity $language = null;
}
