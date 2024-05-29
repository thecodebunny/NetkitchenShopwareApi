<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ShippingMethodTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
