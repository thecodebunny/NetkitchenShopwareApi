<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Media;

use Thecodebunny\ShopwareApi\Data\Entity\MediaTranslation\MediaTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Tag\TagCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MediaThumbnail\MediaThumbnailCollection;
use Thecodebunny\ShopwareApi\Data\Entity\User\UserEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Category\CategoryCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductManufacturer\ProductManufacturerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductMedia\ProductMediaCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductDownload\ProductDownloadCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderLineItemDownload\OrderLineItemDownloadCollection;
use Thecodebunny\ShopwareApi\Data\Entity\User\UserCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MediaFolder\MediaFolderEntity;
use Thecodebunny\ShopwareApi\Data\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use Thecodebunny\ShopwareApi\Data\Entity\MailTemplateMedia\MailTemplateMediaCollection;
use Thecodebunny\ShopwareApi\Data\Entity\DocumentBaseConfig\DocumentBaseConfigCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Thecodebunny\ShopwareApi\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Thecodebunny\ShopwareApi\Data\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Thecodebunny\ShopwareApi\Data\Entity\OrderLineItem\OrderLineItemCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsBlock\CmsBlockCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsSection\CmsSectionCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CmsPage\CmsPageCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Document\DocumentCollection;
use Thecodebunny\ShopwareApi\Data\Entity\AppPaymentMethod\AppPaymentMethodCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Theme\ThemeCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
