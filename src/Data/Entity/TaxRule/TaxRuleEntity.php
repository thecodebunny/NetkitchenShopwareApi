<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\TaxRule;

use Thecodebunny\ShopwareApi\Data\Entity\TaxRuleType\TaxRuleTypeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Country\CountryEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Tax\TaxEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
