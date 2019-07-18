<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConsumerRequestEndpointStructureType
 *
 * Type for Unique reference to this request, created by Consumer. May be used to reference the request in subsequent interactions. Used by WSDL..
 * XSD Type: ConsumerRequestEndpointStructure
 */
class ConsumerRequestEndpointStructureType extends AbstractRequestStructureType
{

    /**
     * Address to which response is to be sent. This may also be determined from RequestorRef and preconfigured data.
     *
     * @property string $address
     */
    private $address = null;

    /**
     * Unique identifier of Consumer - a Participant reference.
     *
     * @property string $consumerRef
     */
    private $consumerRef = null;

    /**
     * Arbitrary unique reference to this message. Some systems may use just timestamp for this.
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
     * Gets as messageIdentifier
     *
     * Arbitrary unique reference to this message. Some systems may use just timestamp for this.
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
     * Arbitrary unique reference to this message. Some systems may use just timestamp for this.
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

