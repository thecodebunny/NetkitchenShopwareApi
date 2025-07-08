<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SnippetSet;

use Thecodebunny\ShopwareApi\Data\Entity\Snippet\SnippetCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetSetEntity extends Entity
{
    public ?string $name = null;

    public ?string $baseFile = null;

    public ?string $iso = null;

    public ?SnippetCollection $snippets = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;
}
