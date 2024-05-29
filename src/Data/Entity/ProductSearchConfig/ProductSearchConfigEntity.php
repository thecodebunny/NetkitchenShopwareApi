<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductSearchConfig;

use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\ProductSearchConfigField\ProductSearchConfigFieldCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchConfigEntity extends Entity
{
    public ?string $languageId = null;

    public ?bool $andLogic = null;

    public ?int $minSearchLength = null;

    public ?array $excludedTerms = null;

    public ?LanguageEntity $language = null;

    public ?ProductSearchConfigFieldCollection $configFields = null;
}
