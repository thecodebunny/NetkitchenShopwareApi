<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SeoUrlTemplate;

use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SeoUrlTemplateEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $entityName = null;

    public ?string $routeName = null;

    public ?string $template = null;

    public ?bool $isValid = null;

    public ?SalesChannelEntity $salesChannel = null;
}
