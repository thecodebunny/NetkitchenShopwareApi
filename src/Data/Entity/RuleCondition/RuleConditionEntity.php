<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\RuleCondition;

use Netktichen\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Netktichen\ShopwareApi\Data\Entity\AppScriptCondition\AppScriptConditionEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
