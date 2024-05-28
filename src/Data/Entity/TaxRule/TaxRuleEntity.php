<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\TaxRule;

use Netktichen\ShopwareApi\Data\Entity\TaxRuleType\TaxRuleTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\Country\CountryEntity;
use Netktichen\ShopwareApi\Data\Entity\Tax\TaxEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleEntity extends Entity
{
    public ?string $taxRuleTypeId = null;

    public ?string $countryId = null;

    public ?float $taxRate = null;

    public ?array $data = null;

    public ?string $taxId = null;

    public ?TaxRuleTypeEntity $type = null;

    public ?CountryEntity $country = null;

    public ?TaxEntity $tax = null;
}
