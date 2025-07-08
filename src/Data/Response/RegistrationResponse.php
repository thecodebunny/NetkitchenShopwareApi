<?php
declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Data\Response;

use Thecodebunny\ShopwareApi\Data\Webhook\ShopRegistrationResult;

class RegistrationResponse extends SdkResponse
{
    public function __construct(ShopRegistrationResult $result, string $confirmationUrl)
    {
        parent::__construct();

        $json = (string) json_encode([
            'proof' => $result->getProof(),
            'secret' => $result->getShop()->getShopSecret(),
            'confirmation_url' => $confirmationUrl
        ]);

        $this->getBody()->write($json);
    }
}
