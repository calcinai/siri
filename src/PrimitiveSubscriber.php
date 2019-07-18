<?php
/**
 * @package    siri-test
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Calcinai\Siri;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;

class PrimitiveSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            array(
                'event' => 'serializer.pre_serialize',
                'method' => 'onPreSerialize',
                'format' => 'xml',
            ),
        );
    }

    public function onPreSerialize(PreSerializeEvent $event)
    {
       if(!is_object($event->getObject())){
           $event->setType(PrimitiveType::class);
       }
    }
}
