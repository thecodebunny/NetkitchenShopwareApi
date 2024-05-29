<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\NumberRangeTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\NumberRange\NumberRangeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
