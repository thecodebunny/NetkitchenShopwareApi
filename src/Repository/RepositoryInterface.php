<?php

declare(strict_types=1);

namespace Thecodebunny\ShopwareApi\Repository;

use Thecodebunny\ShopwareApi\Data\Context;
use Thecodebunny\ShopwareApi\Data\Criteria;
use Thecodebunny\ShopwareApi\Data\Entity\Entity;
use Thecodebunny\ShopwareApi\Data\Entity\EntityDefinition;
use Thecodebunny\ShopwareApi\Repository\Struct\CloneBehaviour;
use Thecodebunny\ShopwareApi\Repository\Struct\EntitySearchResult;
use Thecodebunny\ShopwareApi\Repository\Struct\IdSearchResult;
use Thecodebunny\ShopwareApi\Repository\Struct\VersionResponse;
use Thecodebunny\ShopwareApi\Service\ApiResponse;

interface RepositoryInterface
{
    public function getDefinition(): EntityDefinition;

    public function searchIds(Criteria $criteria, Context $context): IdSearchResult;

    public function get(string $id, Criteria $criteria, Context $context): ?Entity;

    public function search(Criteria $criteria, Context $context): EntitySearchResult;

    public function update(array $data, Context $context);

    public function create(array $data, Context $context);

    public function clone(string $id, Context $context, ?CloneBehaviour $cloneBehaviour = null): string;

    public function createNew(array $data): Entity;

    public function delete(string $id, Context $context);

    public function syncDeleted(array $ids, Context $context): ApiResponse;

    public function createVersion(string $id, Context $context, ?string $versionId = null, ?string $versionName = null): VersionResponse;

    public function mergeVersion(string $versionId, Context $context): void;

    public function deleteVersion(string $id, string $versionId, Context $context): void;
}
