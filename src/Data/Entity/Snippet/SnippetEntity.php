<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Snippet;

use Netktichen\ShopwareApi\Data\Entity\SnippetSet\SnippetSetEntity;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetEntity extends Entity
{
    public ?string $setId = null;

    public ?string $translationKey = null;

    public ?string $value = null;

    public ?string $author = null;

    public ?SnippetSetEntity $set = null;
}
