<?php

namespace Calcinai\Siri;

/**
 * Class representing ResponseEndpointStructureType
 *
 * Type for Unique reference to reponse. May be used to reference request in subsequent interactions. Used for WSDL
 * XSD Type: ResponseEndpointStructure
 */
class ResponseEndpointStructureType extends ResponseStructureType
{

    /**
     * Address for further interaction.
     *
     * @property string $address
     */
    private $address = null;

    /**
     * Participant reference that identifies responder.
     *
     * @property string $responderRef
     */
    private $responderRef = null;

    /**
     * Reference to an arbitrary unique reference associated with the request which gave rise to this response.
     *
     * @property string $requestMessageRef
     */
    private $requestMessageRef = null;

    /**
     * Gets as address
     *
     * Address for further interaction.
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
     * Address for further interaction.
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
     * Gets as responderRef
     *
     * Participant reference that identifies responder.
     *
     * @return string
     */
    public function getResponderRef()
    {
        return $this->responderRef;
    }

    /**
     * Sets a new responderRef
     *
     * Participant reference that identifies responder.
     *
     * @param string $responderRef
     * @return self
     */
    public function setResponderRef($responderRef)
    {
        $this->responderRef = $responderRef;
        return $this;
    }

    /**
     * Gets as requestMessageRef
     *
     * Reference to an arbitrary unique reference associated with the request which gave rise to this response.
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
     * Reference to an arbitrary unique reference associated with the request which gave rise to this response.
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

