<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\ProductReview;

use TheCodeBunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductReviewEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $customerId = null;

    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?string $externalUser = null;

    public ?string $externalEmail = null;

    public ?string $title = null;

    public ?string $content = null;

    public ?float $points = null;

    public ?bool $status = null;

    public ?string $comment = null;

    public ?ProductEntity $product = null;

    public ?CustomerEntity $customer = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;
}
