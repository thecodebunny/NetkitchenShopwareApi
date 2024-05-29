<?php

declare(strict_types=1);

namespace TheCodeBunny\ShopwareApi\Repository;

use TheCodeBunny\ShopwareApi\Data\Context;
use TheCodeBunny\ShopwareApi\Data\Criteria;
use TheCodeBunny\ShopwareApi\Data\Entity\Entity;
use TheCodeBunny\ShopwareApi\Data\Entity\EntityDefinition;
use TheCodeBunny\ShopwareApi\Repository\Struct\CloneBehaviour;
use TheCodeBunny\ShopwareApi\Repository\Struct\EntitySearchResult;
use TheCodeBunny\ShopwareApi\Repository\Struct\IdSearchResult;
use TheCodeBunny\ShopwareApi\Repository\Struct\VersionResponse;
use TheCodeBunny\ShopwareApi\Service\ApiResponse;

interface RepositoryInterface
{
    public function getDefinition(): EntityDefinition;

    public function searchIds(Criteria $criteria, Context $context): IdSearchResult;

    public function get(string $id, Criteria $criteria, Context $context): ?Entity;

    public function search(Criteria $criteria, Context $context): EntitySearchResult;

    public function update(array $data, Context $context): void;

    public function create(array $data, Context $context): void;

    public function clone(string $id, Context $context, ?CloneBehaviour $cloneBehaviour = null): string;

    public function createNew(array $data): Entity;

    public function delete(string $id, Context $context): void;

    public function syncDeleted(array $ids, Context $context): ApiResponse;

    public function createVersion(string $id, Context $context, ?string $versionId = null, ?string $versionName = null): VersionResponse;

    public function mergeVersion(string $versionId, Context $context): void;

    public function deleteVersion(string $id, string $versionId, Context $context): void;
}
