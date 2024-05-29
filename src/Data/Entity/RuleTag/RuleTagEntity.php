<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\RuleTag;

use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Tag\TagEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
