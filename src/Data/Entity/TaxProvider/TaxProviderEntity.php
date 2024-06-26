<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\TaxProvider;

use Thecodebunny\ShopwareApi\Data\Entity\TaxProviderTranslation\TaxProviderTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\App\AppEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxProviderEntity extends Entity
{
    public ?string $identifier = null;

    public ?bool $active = null;

    public ?string $name = null;

    public ?int $priority = null;

    public ?string $processUrl = null;

    public ?string $availabilityRuleId = null;

    public ?string $appId = null;

    public ?TaxProviderTranslationCollection $translations = null;

    public ?RuleEntity $availabilityRule = null;

    public ?AppEntity $app = null;
}
