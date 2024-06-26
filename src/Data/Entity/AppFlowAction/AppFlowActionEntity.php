<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\AppFlowAction;

use Thecodebunny\ShopwareApi\Data\Entity\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\App\AppEntity;
use Thecodebunny\ShopwareApi\Data\Entity\FlowSequence\FlowSequenceCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppFlowActionEntity extends Entity
{
    public ?string $appId = null;

    public ?string $name = null;

    public ?string $badge = null;

    public ?array $parameters = null;

    public ?array $config = null;

    public ?array $headers = null;

    public ?array $requirements = null;

    public ?string $iconRaw = null;

    public ?string $icon = null;

    public ?string $swIcon = null;

    public ?string $url = null;

    public ?bool $delayable = null;

    public ?string $label = null;

    public ?string $description = null;

    public ?string $headline = null;

    public ?AppFlowActionTranslationCollection $translations = null;

    public ?AppEntity $app = null;

    public ?FlowSequenceCollection $flowSequences = null;
}
