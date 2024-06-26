<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use Thecodebunny\ShopwareApi\Client\GrantType\GrantType;
use Thecodebunny\ShopwareApi\Client\GrantType\PasswordGrantType;
use Thecodebunny\ShopwareApi\Client\GrantType\ClientCredentialsGrantType;
use Thecodebunny\ShopwareApi\Client\GrantType\RefreshTokenGrantType;

/**
 * @covers \Thecodebunny\ShopwareApi\Client\GrantType\GrantType
 */
class GrantTypeTest extends TestCase
{
    public function testCreateFromInvalidConfig(): void
    {
        static::expectException(\InvalidArgumentException::class);
        static::expectExceptionMessage('Grant type is not provided in the config');

        GrantType::createFromConfig([
            'username' => 'admin',
            'password' => 'password'
        ]);
    }

    public function testCreateFromUnsupportedGrantTypeConfig(): void
    {
        $grantType = 'unsupported_grant_type';
        static::expectException(\InvalidArgumentException::class);
        static::expectExceptionMessage('Grant type ' . $grantType . ' is not supported');

        GrantType::createFromConfig([
            'grant_type' => $grantType,
            'username' => 'admin',
            'password' => 'password'
        ]);
    }

    public function testCreatePasswordGrantType(): void
    {
        $grantType = GrantType::createFromConfig([
            'grant_type' => GrantType::PASSWORD,
            'username' => 'admin',
            'password' => 'password'
        ]);

        static::assertInstanceOf(PasswordGrantType::class, $grantType);
    }

    public function testCreateClientCredentialGrantType(): void
    {
        $grantType = GrantType::createFromConfig([
            'grant_type' => GrantType::CLIENT_CREDENTIALS,
            'client_id' => 'SWIAD0HGZGVRRZF1T2TUWNDVMG',
            'client_secret' => 'QnpublNSVE40Y1VEbk56WXVtVWU3aXFYZ2oyRXdvem82Tk5JNVI'
        ]);

        static::assertInstanceOf(ClientCredentialsGrantType::class, $grantType);
    }

    public function testCreateRefreshGrantType(): void
    {
        $grantType = GrantType::createFromConfig([
            'grant_type' => GrantType::REFRESH_TOKEN,
            'refresh_token' => 'QnpublNSVE40Y1VEbk56WXVtVWU3aXFYZ2oyRXdvem82Tk5JNVI',
        ]);

        static::assertInstanceOf(RefreshTokenGrantType::class, $grantType);
    }
}
