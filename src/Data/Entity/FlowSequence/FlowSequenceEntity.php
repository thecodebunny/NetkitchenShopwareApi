<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\FlowSequence;

use Thecodebunny\ShopwareApi\Data\Entity\Flow\FlowEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\AppFlowAction\AppFlowActionEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
