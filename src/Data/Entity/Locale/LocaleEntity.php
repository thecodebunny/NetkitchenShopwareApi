<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\Locale;

use TheCodeBunny\ShopwareApi\Data\Entity\Language\LanguageCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\LocaleTranslation\LocaleTranslationCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\User\UserCollection;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleEntity extends Entity
{
    public ?string $code = null;

    public ?string $name = null;

    public ?string $territory = null;

    public ?LanguageCollection $languages = null;

    public ?LocaleTranslationCollection $translations = null;

    public ?UserCollection $users = null;
}
