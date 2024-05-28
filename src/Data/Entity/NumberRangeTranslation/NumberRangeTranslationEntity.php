<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\NumberRangeTranslation;

use Netktichen\ShopwareApi\Data\Entity\NumberRange\NumberRangeEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $numberRangeId = null;

    public ?string $languageId = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?LanguageEntity $language = null;
}
