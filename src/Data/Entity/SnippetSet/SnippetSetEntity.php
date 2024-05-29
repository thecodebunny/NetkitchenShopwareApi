<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\SnippetSet;

use TheCodeBunny\ShopwareApi\Data\Entity\Snippet\SnippetCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

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
