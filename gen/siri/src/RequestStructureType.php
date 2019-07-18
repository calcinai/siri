<?php

namespace Calcinai\Siri;

/**
 * Class representing RequestStructureType
 *
 * Type for General SIRI Request.
 * XSD Type: RequestStructure
 */
class RequestStructureType extends AbstractRequestStructureType
{

    /**
     * Address to which response is to be sent. This may also be determined from RequestorRef and preconfigured data.
     *
     * @property string $address
     */
    private $address = null;

    /**
     * @property string $requestorRef
     */
    private $requestorRef = null;

    /**
     * Arbitrary unique identifier that can be used to reference this message.
     *
     * @property string $messageIdentifier
     */
    private $messageIdentifier = null;

    /**
     * Gets as address
     *
     * Address to which response is to be sent. This may also be determined from RequestorRef and preconfigured data.
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
     * Address to which response is to be sent. This may also be determined from RequestorRef and preconfigured data.
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
     * Gets as requestorRef
     *
     * @return string
     */
    public function getRequestorRef()
    {
        return $this->requestorRef;
    }

    /**
     * Sets a new requestorRef
     *
     * @param string $requestorRef
     * @return self
     */
    public function setRequestorRef($requestorRef)
    {
        $this->requestorRef = $requestorRef;
        return $this;
    }

    /**
     * Gets as messageIdentifier
     *
     * Arbitrary unique identifier that can be used to reference this message.
     *
     * @return string
     */
    public function getMessageIdentifier()
    {
        return $this->messageIdentifier;
    }

    /**
     * Sets a new messageIdentifier
     *
     * Arbitrary unique identifier that can be used to reference this message.
     *
     * @param string $messageIdentifier
     * @return self
     */
    public function setMessageIdentifier($messageIdentifier)
    {
        $this->messageIdentifier = $messageIdentifier;
        return $this;
    }


}

