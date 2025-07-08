<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\TaxRuleType;

use Thecodebunny\ShopwareApi\Data\Entity\TaxRule\TaxRuleCollection;
use Thecodebunny\ShopwareApi\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
