<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\TaxProviderTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\TaxProvider\TaxProviderEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxProviderTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $taxProviderId = null;

    public ?string $languageId = null;

    public ?TaxProviderEntity $taxProvider = null;

    public ?LanguageEntity $language = null;
}
