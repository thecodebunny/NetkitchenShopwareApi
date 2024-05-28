<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\TaxProviderTranslation;

use Netktichen\ShopwareApi\Data\Entity\TaxProvider\TaxProviderEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
