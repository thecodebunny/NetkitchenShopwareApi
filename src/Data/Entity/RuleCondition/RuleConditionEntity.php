<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\RuleCondition;

use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\AppScriptCondition\AppScriptConditionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleConditionEntity extends Entity
{
    public ?string $type = null;

    public ?string $ruleId = null;

    public ?string $scriptId = null;

    public ?string $parentId = null;

    public ?array $value = null;

    public ?int $position = null;

    public ?RuleEntity $rule = null;

    public ?AppScriptConditionEntity $appScriptCondition = null;

    public ?RuleConditionEntity $parent = null;

    public ?RuleConditionCollection $children = null;
}
