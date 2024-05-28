<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\DeliveryTimeTranslation;

use Netktichen\ShopwareApi\Data\Entity\DeliveryTime\DeliveryTimeEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $deliveryTimeId = null;

    public ?string $languageId = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?LanguageEntity $language = null;
}
