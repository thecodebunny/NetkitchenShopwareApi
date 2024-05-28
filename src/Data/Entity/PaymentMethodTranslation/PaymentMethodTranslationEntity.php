<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\PaymentMethodTranslation;

use Netktichen\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Netktichen\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $distinguishableName = null;

    public ?string $description = null;

    public ?string $paymentMethodId = null;

    public ?string $languageId = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?LanguageEntity $language = null;
}
