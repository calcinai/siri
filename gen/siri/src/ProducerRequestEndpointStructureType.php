<?php

namespace Calcinai\Siri;

/**
 * Class representing ProducerRequestEndpointStructureType
 *
 * Type for Unique reference to request to the producer. May be used to reference request in subsequent interactions. Used for WSDL.
 * XSD Type: ProducerRequestEndpointStructure
 */
class ProducerRequestEndpointStructureType extends AbstractRequestStructureType
{

    /**
     * Address to which response is to be sent. This may also be determined from ProducerRef and preconfigured data.
     *
     * @property string $address
     */
    private $address = null;

    /**
     * Unique identifier of Producer - Participant reference.
     *
     * @property string $producerRef
     */
    private $producerRef = null;

    /**
     * Arbitrary unique reference to this message. Some systems may use just timestamp for this. Where there are multiple SubscriptionFilters, this can be used to distinguish between different notifications for different filters.
     *
     * @property string $messageIdentifier
     */
    private $messageIdentifier = null;

    /**
     * Gets as address
     *
     * Address to which response is to be sent. This may also be determined from ProducerRef and preconfigured data.
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
     * Address to which response is to be sent. This may also be determined from ProducerRef and preconfigured data.
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
     * Gets as messageIdentifier
     *
     * Arbitrary unique reference to this message. Some systems may use just timestamp for this. Where there are multiple SubscriptionFilters, this can be used to distinguish between different notifications for different filters.
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
     * Arbitrary unique reference to this message. Some systems may use just timestamp for this. Where there are multiple SubscriptionFilters, this can be used to distinguish between different notifications for different filters.
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

