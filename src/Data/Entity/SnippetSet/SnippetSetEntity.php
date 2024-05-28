<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\SnippetSet;

use Netktichen\ShopwareApi\Data\Entity\Snippet\SnippetCollection;
use Netktichen\ShopwareApi\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

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
