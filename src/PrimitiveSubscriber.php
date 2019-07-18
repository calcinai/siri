<?php
/**
 * @package    siri-test
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Calcinai\Siri;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;
use Metadata\ClassMetadata;

class PrimitiveSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            [
                'event' => 'serializer.pre_serialize',
                'method' => 'onPreSerialize',
                'format' => 'xml',
            ],
            [
                'event' => 'serializer.pre_deserialize',
                'method' => 'onPreDeserialize',
                'format' => 'xml',
            ],
        ];
    }

    public function onPreSerialize(PreSerializeEvent $event)
    {
        if (!is_object($event->getObject())) {
            $event->setType(PrimitiveType::class);
        }
    }

    public function onPreDeserialize(PreDeserializeEvent $event)
    {
        $type = $event->getType();

        try {
            $metadata = $event->getContext()->getMetadataFactory()->getMetadataForClass($type['name']);
        } catch (\Exception $e) {
            return;
        }

        foreach ($metadata->propertyMetadata as $property => $metadata) {
            if (!isset($metadata->type)) {
                $event->setType(PrimitiveType::class);
            }
        }
    }
}
