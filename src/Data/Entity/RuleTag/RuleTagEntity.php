<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\RuleTag;

use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleTagEntity extends Entity
{
    public ?string $ruleId = null;

    public ?string $tagId = null;

    public ?RuleEntity $rule = null;

    public ?TagEntity $tag = null;
}
