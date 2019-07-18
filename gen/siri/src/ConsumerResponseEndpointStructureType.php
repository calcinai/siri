<?php

namespace Calcinai\Siri;

/**
 * Class representing ConsumerResponseEndpointStructureType
 *
 * Type for Unique reference to this response created by Consumer. May be used to reference the request in subsequent interactions. Used by WSDL..
 * XSD Type: ConsumerResponseEndpointStructure
 */
class ConsumerResponseEndpointStructureType extends ResponseStructureType
{

    /**
     * Unique identifier of Consumer - a Participant reference.
     *
     * @property string $consumerRef
     */
    private $consumerRef = null;

    /**
     * Reference to an arbitrary unique idenitifer associated with the request which gave rise to this response.
     *
     * @property string $requestMessageRef
     */
    private $requestMessageRef = null;

    /**
     * Gets as consumerRef
     *
     * Unique identifier of Consumer - a Participant reference.
     *
     * @return string
     */
    public function getConsumerRef()
    {
        return $this->consumerRef;
    }

    /**
     * Sets a new consumerRef
     *
     * Unique identifier of Consumer - a Participant reference.
     *
     * @param string $consumerRef
     * @return self
     */
    public function setConsumerRef($consumerRef)
    {
        $this->consumerRef = $consumerRef;
        return $this;
    }

    /**
     * Gets as requestMessageRef
     *
     * Reference to an arbitrary unique idenitifer associated with the request which gave rise to this response.
     *
     * @return string
     */
    public function getRequestMessageRef()
    {
        return $this->requestMessageRef;
    }

    /**
     * Sets a new requestMessageRef
     *
     * Reference to an arbitrary unique idenitifer associated with the request which gave rise to this response.
     *
     * @param string $requestMessageRef
     * @return self
     */
    public function setRequestMessageRef($requestMessageRef)
    {
        $this->requestMessageRef = $requestMessageRef;
        return $this;
    }


}

