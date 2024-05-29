<?php
declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Entity;

trait EntityCustomFieldsTrait
{
    protected ?array $customFields;

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
