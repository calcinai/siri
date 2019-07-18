<?php
/**
 * @package    siri-test
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Calcinai\Siri;

use Calcinai\Siri\Objects\Siri;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;

class Serializer
{
    const FORMAT_XML = 'xml';

    public $serializer;

    /**
     * Serializer constructor.
     */
    public function __construct()
    {
        try {
            $rc = new \ReflectionClass(Siri::class);
        } catch (\ReflectionException $e) {
            //This is impossible if the library has been installed with composer.
        }

        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__ . '/../gen/siri/meta', $rc->getNamespaceName());
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            $handler->registerSubscribingHandler(new PrimitiveHandler());
        });

        $serializerBuilder->configureListeners(function (EventDispatcher $dispatcher) {
            $dispatcher->addSubscriber(new PrimitiveSubscriber());
        });

        $this->serializer = $serializerBuilder->build();
    }

    public function serialize($siri, $format = self::FORMAT_XML)
    {
        return $this->serializer->serialize($siri, $format);
    }
}
