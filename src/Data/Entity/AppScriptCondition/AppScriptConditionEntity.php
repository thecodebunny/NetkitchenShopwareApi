<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\AppScriptCondition;

use TheCodeBunny\ShopwareApi\Data\Entity\App\AppEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\RuleCondition\RuleConditionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppScriptConditionEntity extends Entity
{
    public ?string $identifier = null;

    public ?string $name = null;

    public ?bool $active = null;

    public ?string $group = null;

    public ?string $script = null;

    public ?string $constraints = null;

    public ?array $config = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;

    public ?RuleConditionCollection $ruleConditions = null;

    public ?AppScriptConditionTranslationCollection $translations = null;
}
