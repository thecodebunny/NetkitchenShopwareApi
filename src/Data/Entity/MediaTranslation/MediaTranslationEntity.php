<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\MediaTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTranslationEntity extends Entity
{
    public ?string $title = null;

    public ?string $alt = null;

    public ?string $mediaId = null;

    public ?string $languageId = null;

    public ?MediaEntity $media = null;

    public ?LanguageEntity $language = null;
}
