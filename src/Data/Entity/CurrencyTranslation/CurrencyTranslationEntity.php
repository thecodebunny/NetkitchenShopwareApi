<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\CurrencyTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\Currency\CurrencyEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyTranslationEntity extends Entity
{
    public ?string $shortName = null;

    public ?string $name = null;

    public ?string $currencyId = null;

    public ?string $languageId = null;

    public ?CurrencyEntity $currency = null;

    public ?LanguageEntity $language = null;
}
