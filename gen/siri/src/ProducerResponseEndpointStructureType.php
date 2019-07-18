<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ProducerResponseEndpointStructureType
 *
 * Type for Unique reference to reponse from producer. May be used to reference request in subsequent interactions. Used for WSDL.
 * XSD Type: ProducerResponseEndpointStructure
 */
class ProducerResponseEndpointStructureType extends ResponseStructureType
{

    /**
     * Unique identifier of Producer - Participant reference.
     *
     * @property string $producerRef
     */
    private $producerRef = null;

    /**
     * Address to which acknowledgements to confirm delviery are to be sent.
     *
     * @property string $address
     */
    private $address = null;

    /**
     * An arbitrary unique reference associated with the response which may be used to reference it.
     *
     * @property string $responseMessageIdentifier
     */
    private $responseMessageIdentifier = null;

    /**
     * Reference to an arbitrary unique identifier associated with the request which gave rise to this response.
     *
     * @property string $requestMessageRef
     */
    private $requestMessageRef = null;

    /**
     * Gets as producerRef
     *
     * Unique identifier of Producer - Participant reference.
     *
     * @return string
     */
    public function getProducerRef()
    {
        return $this->producerRef;
    }

    /**
     * Sets a new producerRef
     *
     * Unique identifier of Producer - Participant reference.
     *
     * @param string $producerRef
     * @return self
     */
    public function setProducerRef($producerRef)
    {
        $this->producerRef = $producerRef;
        return $this;
    }

    /**
     * Gets as address
     *
     * Address to which acknowledgements to confirm delviery are to be sent.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address to which acknowledgements to confirm delviery are to be sent.
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as responseMessageIdentifier
     *
     * An arbitrary unique reference associated with the response which may be used to reference it.
     *
     * @return string
     */
    public function getResponseMessageIdentifier()
    {
        return $this->responseMessageIdentifier;
    }

    /**
     * Sets a new responseMessageIdentifier
     *
     * An arbitrary unique reference associated with the response which may be used to reference it.
     *
     * @param string $responseMessageIdentifier
     * @return self
     */
    public function setResponseMessageIdentifier($responseMessageIdentifier)
    {
        $this->responseMessageIdentifier = $responseMessageIdentifier;
        return $this;
    }

    /**
     * Gets as requestMessageRef
     *
     * Reference to an arbitrary unique identifier associated with the request which gave rise to this response.
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
     * Reference to an arbitrary unique identifier associated with the request which gave rise to this response.
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

