<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\App;

use Netktichen\ShopwareApi\Data\Entity\AppTranslation\AppTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Integration\IntegrationEntity;
use Netktichen\ShopwareApi\Data\Entity\AclRole\AclRoleEntity;
use Netktichen\ShopwareApi\Data\Entity\CustomFieldSet\CustomFieldSetCollection;
use Netktichen\ShopwareApi\Data\Entity\AppActionButton\AppActionButtonCollection;
use Netktichen\ShopwareApi\Data\Entity\AppTemplate\AppTemplateCollection;
use Netktichen\ShopwareApi\Data\Entity\Script\ScriptCollection;
use Netktichen\ShopwareApi\Data\Entity\Webhook\WebhookCollection;
use Netktichen\ShopwareApi\Data\Entity\AppPaymentMethod\AppPaymentMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\TaxProvider\TaxProviderCollection;
use Netktichen\ShopwareApi\Data\Entity\AppScriptCondition\AppScriptConditionCollection;
use Netktichen\ShopwareApi\Data\Entity\AppCmsBlock\AppCmsBlockCollection;
use Netktichen\ShopwareApi\Data\Entity\AppFlowAction\AppFlowActionCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppEntity extends Entity
{
    public ?string $name = null;

    public ?string $path = null;

    public ?string $author = null;

    public ?string $copyright = null;

    public ?string $license = null;

    public ?bool $active = null;

    public ?bool $configurable = null;

    public ?string $privacy = null;

    public ?string $version = null;

    public ?string $iconRaw = null;

    public ?string $icon = null;

    public ?string $appSecret = null;

    public ?array $modules = null;

    public ?array $mainModule = null;

    public ?array $cookies = null;

    public ?bool $allowDisable = null;

    public ?string $baseAppUrl = null;

    public ?array $allowedHosts = null;

    public ?int $templateLoadPriority = null;

    public ?AppTranslationCollection $translations = null;

    public ?string $label = null;

    public ?string $description = null;

    public ?string $privacyPolicyExtensions = null;

    public ?string $integrationId = null;

    public ?IntegrationEntity $integration = null;

    public ?string $aclRoleId = null;

    public ?AclRoleEntity $aclRole = null;

    public ?CustomFieldSetCollection $customFieldSets = null;

    public ?AppActionButtonCollection $actionButtons = null;

    public ?AppTemplateCollection $templates = null;

    public ?ScriptCollection $scripts = null;

    public ?WebhookCollection $webhooks = null;

    public ?AppPaymentMethodCollection $paymentMethods = null;

    public ?TaxProviderCollection $taxProviders = null;

    public ?AppScriptConditionCollection $scriptConditions = null;

    public ?AppCmsBlockCollection $cmsBlocks = null;

    public ?AppFlowActionCollection $flowActions = null;
}
