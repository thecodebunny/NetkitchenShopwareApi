<?php declare(strict_types=1);

namespace Netktichen\ShopwareApi\Exception;

class ShopwareResponseException extends \Exception
{
    public function getResponse(): array
    {
        return json_decode($this->message, true);
    }
}
