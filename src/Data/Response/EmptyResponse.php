<?php
declare(strict_types=1);

namespace Netktichen\ShopwareApi\Data\Response;

class EmptyResponse extends SdkResponse
{
    public function __construct()
    {
        parent::__construct(204);
    }
}
