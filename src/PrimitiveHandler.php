<?php
/**
 * @package    siri-test
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Calcinai\Siri;


use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;

class PrimitiveHandler implements SubscribingHandlerInterface
{

    /**
     * Return format:
     *
     *      array(
     *          array(
     *              'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
     *              'format' => 'json',
     *              'type' => 'DateTime',
     *              'method' => 'serializeDateTimeToJson',
     *          ),
     *      )
     *
     * The direction and method keys can be omitted.
     *
     * @return array
     */
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => PrimitiveType::class,
                'method' => 'serializePrimitive'
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => PrimitiveType::class,
                'method' => 'deserializePrimitive'
            ],
        ];
    }

    public function serializePrimitive(XmlSerializationVisitor $visitor, $primitive, array $type, Context $context)
    {
        switch (true) {
            case is_bool($primitive):
                return $visitor->visitBoolean($primitive, $type, $context);
            case is_string($primitive):
            default:
                return $visitor->visitSimpleString($primitive, $type, $context);

        }
    }

    public function deserializePrimitive(XmlDeserializationVisitor $visitor, $primitive, array $type, Context $context)
    {
        return $primitive;
    }

}
