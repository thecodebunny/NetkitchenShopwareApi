<?php declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Exception;

use Thecodebunny\ShopwareApi\Data\Criteria;

class ShopwareSearchResponseException extends ShopwareResponseException
{
    private Criteria $criteria;

    public function __construct(string $message, int $code, Criteria $criteria, \Throwable $throwable)
    {
        parent::__construct($message, $code, $throwable);
        $this->criteria = $criteria;
    }

    public function getCriteria(): Criteria
    {
        return $this->criteria;
    }
}
