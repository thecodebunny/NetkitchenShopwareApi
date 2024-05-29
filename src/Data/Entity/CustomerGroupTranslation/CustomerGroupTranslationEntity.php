<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CustomerGroupTranslation;

use Thecodebunny\ShopwareApi\Data\Entity\CustomerGroup\CustomerGroupEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $registrationTitle = null;

    public ?string $registrationIntroduction = null;

    public ?bool $registrationOnlyCompanyRegistration = null;

    public ?string $registrationSeoMetaDescription = null;

    public ?string $customerGroupId = null;

    public ?string $languageId = null;

    public ?CustomerGroupEntity $customerGroup = null;

    public ?LanguageEntity $language = null;
}
