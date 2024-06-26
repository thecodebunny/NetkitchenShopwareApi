<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\CustomerGroup;

use Thecodebunny\ShopwareApi\Data\Entity\Customer\CustomerCollection;
use Thecodebunny\ShopwareApi\Data\Entity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\SalesChannel\SalesChannelCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupEntity extends Entity
{
    public ?string $name = null;

    public ?bool $displayGross = null;

    public ?bool $registrationActive = null;

    public ?string $registrationTitle = null;

    public ?string $registrationIntroduction = null;

    public ?bool $registrationOnlyCompanyRegistration = null;

    public ?string $registrationSeoMetaDescription = null;

    public ?CustomerCollection $customers = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?CustomerGroupTranslationCollection $translations = null;

    public ?SalesChannelCollection $registrationSalesChannels = null;
}
