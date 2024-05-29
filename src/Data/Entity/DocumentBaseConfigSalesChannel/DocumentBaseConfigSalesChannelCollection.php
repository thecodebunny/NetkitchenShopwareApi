<?php declare(strict_types=1);
namespace TheCodeBunny\ShopwareApi\Data\Entity\DocumentBaseConfigSalesChannel;

use TheCodeBunny\ShopwareApi\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(DocumentBaseConfigSalesChannelEntity $entity)
 * @method void set(DocumentBaseConfigSalesChannelEntity $entity)
 * @method DocumentBaseConfigSalesChannelEntity[] getIterator()
 * @method DocumentBaseConfigSalesChannelEntity[] getElements()
 * @method DocumentBaseConfigSalesChannelEntity|null get(string $key)
 * @method DocumentBaseConfigSalesChannelEntity|null first()
 * @method DocumentBaseConfigSalesChannelEntity|null last()
 */
class DocumentBaseConfigSalesChannelCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return DocumentBaseConfigSalesChannelEntity::class;
    }
}
