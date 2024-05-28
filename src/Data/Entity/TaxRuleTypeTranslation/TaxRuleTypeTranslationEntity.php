<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\TaxRuleTypeTranslation;

use Netktichen\ShopwareApi\Data\Entity\TaxRuleType\TaxRuleTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleTypeTranslationEntity extends Entity
{
    public ?string $typeName = null;

    public ?string $taxRuleTypeId = null;

    public ?string $languageId = null;

    public ?TaxRuleTypeEntity $taxRuleType = null;

    public ?LanguageEntity $language = null;
}
