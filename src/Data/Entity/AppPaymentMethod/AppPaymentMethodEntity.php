<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppPaymentMethod;

use Thecodebunny\ShopwareApi\Data\Entity\App\AppEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppPaymentMethodEntity extends Entity
{
    public ?string $appName = null;

    public ?string $identifier = null;

    public ?string $payUrl = null;

    public ?string $finalizeUrl = null;

    public ?string $validateUrl = null;

    public ?string $captureUrl = null;

    public ?string $refundUrl = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;

    public ?string $originalMediaId = null;

    public ?MediaEntity $originalMedia = null;

    public ?string $paymentMethodId = null;

    public ?PaymentMethodEntity $paymentMethod = null;
}
