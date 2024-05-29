<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PromotionTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\Promotion\PromotionEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $promotionId = null;

    public ?string $languageId = null;

    public ?PromotionEntity $promotion = null;

    public ?LanguageEntity $language = null;
}
