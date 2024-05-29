<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\PaymentMethod;

use Thecodebunny\ShopwareApi\Data\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Plugin\PluginEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\AppPaymentMethod\AppPaymentMethodEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodEntity extends Entity
{
    public ?string $pluginId = null;

    public ?string $handlerIdentifier = null;

    public ?string $name = null;

    public ?string $distinguishableName = null;

    public ?string $description = null;

    public ?int $position = null;

    public ?bool $active = null;

    public ?bool $afterOrderEnabled = null;

    public ?string $availabilityRuleId = null;

    public ?string $mediaId = null;

    public ?string $formattedHandlerIdentifier = null;

    public ?bool $synchronous = null;

    public ?bool $asynchronous = null;

    public ?bool $prepared = null;

    public ?bool $refundable = null;

    public ?PaymentMethodTranslationCollection $translations = null;

    public ?MediaEntity $media = null;

    public ?RuleEntity $availabilityRule = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?PluginEntity $plugin = null;

    public ?CustomerCollection $customers = null;

    public ?OrderTransactionCollection $orderTransactions = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?AppPaymentMethodEntity $appPaymentMethod = null;

    public ?string $shortName = null;
}
