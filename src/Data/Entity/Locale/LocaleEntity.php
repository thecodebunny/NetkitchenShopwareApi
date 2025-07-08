<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\Locale;

use Thecodebunny\ShopwareApi\Data\Entity\Language\LanguageCollection;
use Thecodebunny\ShopwareApi\Data\Entity\LocaleTranslation\LocaleTranslationCollection;
use Thecodebunny\ShopwareApi\Data\Entity\User\UserCollection;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;

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
