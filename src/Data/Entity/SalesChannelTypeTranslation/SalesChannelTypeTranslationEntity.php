<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\SalesChannelTypeTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\SalesChannelType\SalesChannelTypeEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTypeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $manufacturer = null;

    public ?string $description = null;

    public ?string $descriptionLong = null;

    public ?string $salesChannelTypeId = null;

    public ?string $languageId = null;

    public ?SalesChannelTypeEntity $salesChannelType = null;

    public ?LanguageEntity $language = null;
}
