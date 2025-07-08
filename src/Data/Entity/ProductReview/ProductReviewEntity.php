<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\ProductReview;

use Thecodebunny\ShopwareApi\Data\Entity\Product\ProductEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerEntity;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
