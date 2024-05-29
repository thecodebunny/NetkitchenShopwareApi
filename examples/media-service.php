<?php

require __DIR__ . '/../vendor/autoload.php';

use Thecodebunny\ShopwareApi\Data\Context;
use Thecodebunny\ShopwareApi\Data\Entity\Media\MediaDefinition;
use Thecodebunny\ShopwareApi\Factory\RepositoryFactory;
use Thecodebunny\ShopwareApi\Data\Criteria;
use Thecodebunny\ShopwareApi\Service\MediaService;

class MediaServiceExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';
        $url = 'https://image.shutterstock.com/image-photo/stock-photo-woman-with-static-electric-hair-isolated-on-black-background-250nw-2014152446.jpg';

        $context = new Context($config['shop_url'], $accessToken);
        $mediaService = new MediaService($context);

        $mediaRepo = RepositoryFactory::create(MediaDefinition::ENTITY_NAME);
        $mediaId = $mediaRepo->searchIds(new Criteria(), $context)->firstId();

        dump("============================================");
        dump("Upload Media From URL");
        $mediaService->uploadMediaFromUrl($mediaId, $url, 'jpg', 'test-media');

        dump("============================================");
        dump("Rename Media");
        $mediaService->renameMedia($mediaId, 'edited-media');

        dump("============================================");
        dump("Provide name");
        $response = $mediaService->provideName('edited-media', 'jpg', $mediaId);

        dump($response);
    }
}

$example = new MediaServiceExample();
$example->execute();