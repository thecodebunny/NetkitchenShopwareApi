<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\PaymentMethod;

use TheCodeBunny\ShopwareApi\Data\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Rule\RuleEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Plugin\PluginEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\OrderTransaction\OrderTransactionCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\AppPaymentMethod\AppPaymentMethodEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
