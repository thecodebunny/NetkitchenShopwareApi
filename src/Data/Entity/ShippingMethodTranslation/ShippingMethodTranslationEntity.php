<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\ShippingMethodTranslation;

use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $trackingUrl = null;

    public ?string $shippingMethodId = null;

    public ?string $languageId = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?LanguageEntity $language = null;
}
