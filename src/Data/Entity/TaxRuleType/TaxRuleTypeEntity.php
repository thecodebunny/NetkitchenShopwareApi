<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\TaxRuleType;

use TheCodeBunny\ShopwareApi\Data\Entity\TaxRule\TaxRuleCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleTypeEntity extends Entity
{
    public ?string $technicalName = null;

    public ?int $position = null;

    public ?string $typeName = null;

    public ?TaxRuleCollection $rules = null;

    public ?TaxRuleTypeTranslationCollection $translations = null;
}
