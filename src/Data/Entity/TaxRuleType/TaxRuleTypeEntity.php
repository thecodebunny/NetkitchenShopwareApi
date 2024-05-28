<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\TaxRuleType;

use Netktichen\ShopwareApi\Data\Entity\TaxRule\TaxRuleCollection;
use Netktichen\ShopwareApi\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
