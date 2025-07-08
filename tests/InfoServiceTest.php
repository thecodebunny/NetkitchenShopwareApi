<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use Thecodebunny\ShopwareApi\Data\AccessToken;
use Thecodebunny\ShopwareApi\Data\Context;
use Thecodebunny\ShopwareApi\Data\Schema\Schema;
use Thecodebunny\ShopwareApi\Service\InfoService;

/**
 * @covers \Thecodebunny\ShopwareApi\Service\InfoService
 */
class InfoServiceTest extends TestCase
{
    public function testGetSchema(): void
    {
        $entityMapping = file_get_contents(__DIR__ . '/../src/Resources/entity-mapping.json');

        $entityMapping = json_decode($entityMapping, true);

        $accessToken = new AccessToken('fakeAccessToken');
        $context = new Context('http://test.com', $accessToken);

        $infoService = new InfoService($context);
        foreach ($entityMapping as $entity => $definition) {
            $schema = $infoService->getSchema($entity);

            static::assertInstanceOf(Schema::class, $schema);
            static::assertEquals($entity, $schema->entity);
        }
    }
}
