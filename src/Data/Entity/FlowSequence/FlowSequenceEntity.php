<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\FlowSequence;

use TheCodeBunny\ShopwareApi\Data\Entity\Flow\FlowEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\AppFlowAction\AppFlowActionEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class FlowSequenceEntity extends Entity
{
    public ?string $flowId = null;

    public ?string $ruleId = null;

    public ?string $actionName = null;

    public ?array $config = null;

    public ?int $position = null;

    public ?int $displayGroup = null;

    public ?bool $trueCase = null;

    public ?FlowEntity $flow = null;

    public ?RuleEntity $rule = null;

    public ?FlowSequenceEntity $parent = null;

    public ?FlowSequenceCollection $children = null;

    public ?string $parentId = null;

    public ?string $appFlowActionId = null;

    public ?AppFlowActionEntity $appFlowAction = null;
}
