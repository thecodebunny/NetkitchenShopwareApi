<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\NumberRangeTypeTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\NumberRangeType\NumberRangeTypeEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeTranslationEntity extends Entity
{
    public ?string $typeName = null;

    public ?string $numberRangeTypeId = null;

    public ?string $languageId = null;

    public ?NumberRangeTypeEntity $numberRangeType = null;

    public ?LanguageEntity $language = null;
}
