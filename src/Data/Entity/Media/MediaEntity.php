<?php declare(strict_types=1);
namespace Netktichen\ShopwareApi\Data\Entity\Media;

use Netktichen\ShopwareApi\Data\Entity\MediaTranslation\MediaTranslationCollection;
use Netktichen\ShopwareApi\Data\Entity\Tag\TagCollection;
use Netktichen\ShopwareApi\Data\Entity\MediaThumbnail\MediaThumbnailCollection;
use Netktichen\ShopwareApi\Data\Entity\User\UserEntity;
use Netktichen\ShopwareApi\Data\Entity\Category\CategoryCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductManufacturer\ProductManufacturerCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductMedia\ProductMediaCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductDownload\ProductDownloadCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderLineItemDownload\OrderLineItemDownloadCollection;
use Netktichen\ShopwareApi\Data\Entity\User\UserCollection;
use Netktichen\ShopwareApi\Data\Entity\MediaFolder\MediaFolderEntity;
use Netktichen\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use Netktichen\ShopwareApi\Data\Entity\MailTemplateMedia\MailTemplateMediaCollection;
use Netktichen\ShopwareApi\Data\Entity\DocumentBaseConfig\DocumentBaseConfigCollection;
use Netktichen\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Netktichen\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemCollection;
use Netktichen\ShopwareApi\Data\Entity\CmsBlock\CmsBlockCollection;
use Netktichen\ShopwareApi\Data\Entity\CmsSection\CmsSectionCollection;
use Netktichen\ShopwareApi\Data\Entity\CmsPage\CmsPageCollection;
use Netktichen\ShopwareApi\Data\Entity\Document\DocumentCollection;
use Netktichen\ShopwareApi\Data\Entity\AppPaymentMethod\AppPaymentMethodCollection;
use Netktichen\ShopwareApi\Data\Entity\Theme\ThemeCollection;
use Netktichen\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaEntity extends Entity
{
    public ?string $userId = null;

    public ?string $mediaFolderId = null;

    public ?string $mimeType = null;

    public ?string $fileExtension = null;

    public ?\DateTimeInterface$uploadedAt = null;

    public ?string $fileName = null;

    public ?int $fileSize = null;

    public ?string $mediaTypeRaw = null;

    public ?array $metaData = null;

    public ?array $mediaType = null;

    public ?string $alt = null;

    public ?string $title = null;

    public ?string $url = null;

    public ?bool $hasFile = null;

    public ?bool $private = null;

    public ?string $thumbnailsRo = null;

    public ?MediaTranslationCollection $translations = null;

    public ?TagCollection $tags = null;

    public ?MediaThumbnailCollection $thumbnails = null;

    public ?UserEntity $user = null;

    public ?CategoryCollection $categories = null;

    public ?ProductManufacturerCollection $productManufacturers = null;

    public ?ProductMediaCollection $productMedia = null;

    public ?ProductDownloadCollection $productDownloads = null;

    public ?OrderLineItemDownloadCollection $orderLineItemDownloads = null;

    public ?UserCollection $avatarUsers = null;

    public ?MediaFolderEntity $mediaFolder = null;

    public ?PropertyGroupOptionCollection $propertyGroupOptions = null;

    public ?MailTemplateMediaCollection $mailTemplateMedia = null;

    public ?DocumentBaseConfigCollection $documentBaseConfigs = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?ProductConfiguratorSettingCollection $productConfiguratorSettings = null;

    public ?OrderLineItemCollection $orderLineItems = null;

    public ?CmsBlockCollection $cmsBlocks = null;

    public ?CmsSectionCollection $cmsSections = null;

    public ?CmsPageCollection $cmsPages = null;

    public ?DocumentCollection $documents = null;

    public ?AppPaymentMethodCollection $appPaymentMethods = null;

    public ?ThemeCollection $themes = null;

    public ?ThemeCollection $themeMedia = null;
}
