<?php

require __DIR__ . '/../vendor/autoload.php';

use Netktichen\ShopwareApi\Data\Context;
use Netktichen\ShopwareApi\Service\NotificationService;
use Netktichen\ShopwareApi\Service\Struct\Notification;

class NotificationServiceExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);
        $service = new NotificationService($context);

        $notification = Notification::createNotificationSuccess('Hello from External App!');

        $service->sendNotification($notification);

        $notifications = $service->fetchNotification();
        dump($notifications);
    }
}

$example = new NotificationServiceExample();
$example->execute();