<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use TheCodeBunny\ShopwareApi\Data\AccessToken;
use TheCodeBunny\ShopwareApi\Data\Context;
use TheCodeBunny\ShopwareApi\Data\Schema\Schema;
use TheCodeBunny\ShopwareApi\Service\InfoService;

/**
 * @covers \TheCodeBunny\ShopwareApi\Service\InfoService
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
