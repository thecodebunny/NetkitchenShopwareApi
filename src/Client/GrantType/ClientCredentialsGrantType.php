<?php

declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Client\GrantType;

class ClientCredentialsGrantType extends GrantType
{
    public string $clientSecret;

    public function __construct(string $clientId, string $clientSecret)
    {
        parent::__construct(self::CLIENT_CREDENTIALS, $clientId);
        $this->clientSecret = $clientSecret;
    }
}
