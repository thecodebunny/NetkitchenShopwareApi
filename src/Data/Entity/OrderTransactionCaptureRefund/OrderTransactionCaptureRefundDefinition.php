<?php declare(strict_types=1);
namespace Thecodebunny\ShopwareApi\Data\Entity\OrderTransactionCaptureRefund;

use Thecodebunny\ShopwareApi\Data\Entity\EntityDefinition;
use Thecodebunny\ShopwareApi\Data\Schema\PropertyCollection;
use Thecodebunny\ShopwareApi\Data\Schema\FlagCollection;
use Thecodebunny\ShopwareApi\Data\Schema\Property;
use Thecodebunny\ShopwareApi\Data\Schema\Flag;
use Thecodebunny\ShopwareApi\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureRefundDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_transaction_capture_refund';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderTransactionCaptureRefundEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderTransactionCaptureRefundCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('order_transaction_capture_refund', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('captureId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('stateId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('stateMachineState', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), ['entity' => 'state_machine_state', 'referenceField' => 'id', 'localField' => 'stateId', 'relation' => 'many_to_one', ]),
            new Property('transactionCapture', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), ['entity' => 'order_transaction_capture', 'referenceField' => 'id', 'localField' => 'captureId', 'relation' => 'many_to_one', ]),
            new Property('positions', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('cascade_delete', 1), ]), ['entity' => 'order_transaction_capture_refund_position', 'referenceField' => 'refundId', 'localField' => 'id', 'relation' => 'one_to_many', ]),
            new Property('externalReference', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
            new Property('reason', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
            new Property('amount', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), ['properties' => json_decode('{"unitPrice":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"totalPrice":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"quantity":{"type":"int","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"calculatedTaxes":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"taxRules":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"referencePrice":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"listPrice":{"type":"json_object","properties":{"price":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"discount":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"percentage":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}},"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"regulationPrice":{"type":"json_object","properties":{"price":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}},"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}}', true), ]),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
