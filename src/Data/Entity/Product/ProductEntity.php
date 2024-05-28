<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Product;

use Netktichen\ShopwareApi\Data\Entity\ProductDownload\ProductDownloadCollection;
use Netktichen\ShopwareApi\Data\Entity\DeliveryTime\DeliveryTimeEntity;
use Netktichen\ShopwareApi\Data\Entity\Tax\TaxEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductManufacturer\ProductManufacturerEntity;
use Netktichen\ShopwareApi\Data\Entity\Unit\UnitEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductMedia\ProductMediaEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductFeatureSet\ProductFeatureSetEntity;
use Netktichen\ShopwareApi\Data\Entity\CmsPage\CmsPageEntity;
use Netktichen\ShopwareApi\Data\Entity\ProductPrice\ProductPriceCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductMedia\ProductMediaCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductCrossSelling\ProductCrossSellingCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductVisibility\ProductVisibilityCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductSearchKeyword\ProductSearchKeywordCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductReview\ProductReviewCollection;
use Netktichen\ShopwareApi\Data\Entity\MainCategory\MainCategoryCollection;
use Netktichen\ShopwareApi\Data\Entity\SeoUrl\SeoUrlCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemCollection;
use Netktichen\ShopwareApi\Data\Entity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductStream\ProductStreamCollection;
use Netktichen\ShopwareApi\Data\Entity\Category\CategoryCollection;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagCollection;
use Netktichen\ShopwareApi\Data\Entity\CustomFieldSet\CustomFieldSetCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductTranslation\ProductTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $parentVersionId = null;

    public ?string $manufacturerId = null;

    public ?string $productManufacturerVersionId = null;

    public ?string $unitId = null;

    public ?string $taxId = null;

    public ?string $coverId = null;

    public ?string $productMediaVersionId = null;

    public ?string $deliveryTimeId = null;

    public ?string $featureSetId = null;

    public ?string $canonicalProductId = null;

    public ?string $cmsPageId = null;

    public ?string $cmsPageVersionId = null;

    public ?array $price = null;

    public ?string $productNumber = null;

    public ?int $stock = null;

    public ?int $restockTime = null;

    public ?int $autoIncrement = null;

    public ?bool $active = null;

    public ?int $availableStock = null;

    public ?bool $available = null;

    public ?bool $isCloseout = null;

    public ?array $variation = null;

    public ?string $displayGroup = null;

    public ?array $variantListingConfig = null;

    public ?array $variantRestrictions = null;

    public ?string $manufacturerNumber = null;

    public ?string $ean = null;

    public ?int $purchaseSteps = null;

    public ?int $maxPurchase = null;

    public ?int $minPurchase = null;

    public ?float $purchaseUnit = null;

    public ?float $referenceUnit = null;

    public ?bool $shippingFree = null;

    public ?array $purchasePrices = null;

    public ?bool $markAsTopseller = null;

    public ?float $weight = null;

    public ?float $width = null;

    public ?float $height = null;

    public ?float $length = null;

    public ?\DateTimeInterface$releaseDate = null;

    public ?float $ratingAverage = null;

    public ?array $categoryTree = null;

    public ?array $propertyIds = null;

    public ?array $optionIds = null;

    public ?array $streamIds = null;

    public ?array $tagIds = null;

    public ?array $categoryIds = null;

    public ?int $childCount = null;

    public ?bool $customFieldSetSelectionActive = null;

    public ?int $sales = null;

    public ?array $states = null;

    public ?ProductDownloadCollection $downloads = null;

    public ?string $metaDescription = null;

    public ?string $name = null;

    public ?string $keywords = null;

    public ?string $description = null;

    public ?string $metaTitle = null;

    public ?string $packUnit = null;

    public ?string $packUnitPlural = null;

    public ?array $slotConfig = null;

    public ?array $customSearchKeywords = null;

    public ?ProductEntity $parent = null;

    public ?ProductCollection $children = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?TaxEntity $tax = null;

    public ?ProductManufacturerEntity $manufacturer = null;

    public ?UnitEntity $unit = null;

    public ?ProductMediaEntity $cover = null;

    public ?ProductFeatureSetEntity $featureSet = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?ProductEntity $canonicalProduct = null;

    public ?ProductPriceCollection $prices = null;

    public ?ProductMediaCollection $media = null;

    public ?ProductCrossSellingCollection $crossSellings = null;

    public ?ProductCrossSellingAssignedProductsCollection $crossSellingAssignedProducts = null;

    public ?ProductConfiguratorSettingCollection $configuratorSettings = null;

    public ?ProductVisibilityCollection $visibilities = null;

    public ?ProductSearchKeywordCollection $searchKeywords = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?OrderLineItemCollection $orderLineItems = null;

    public ?CustomerWishlistProductCollection $wishlists = null;

    public ?PropertyGroupOptionCollection $options = null;

    public ?PropertyGroupOptionCollection $properties = null;

    public ?CategoryCollection $categories = null;

    public ?ProductStreamCollection $streams = null;

    public ?CategoryCollection $categoriesRo = null;

    public ?TagCollection $tags = null;

    public ?CustomFieldSetCollection $customFieldSets = null;

    public ?ProductTranslationCollection $translations = null;
}
