<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\SalutationTranslation;

use TheCodeBunny\ShopwareApi\Data\Entity\Salutation\SalutationEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageEntity;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalutationTranslationEntity extends Entity
{
    public ?string $displayName = null;

    public ?string $letterName = null;

    public ?string $salutationId = null;

    public ?string $languageId = null;

    public ?SalutationEntity $salutation = null;

    public ?LanguageEntity $language = null;
}
