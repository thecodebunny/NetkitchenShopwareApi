<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NumberRangeTypeTranslation;

use Netktichen\ShopwareApi\Data\Entity\NumberRangeType\NumberRangeTypeEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
