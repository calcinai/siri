<?php

namespace Calcinai\Siri;

/**
 * Class representing CheckStatusResponseStructureType
 *
 * Type for Service Status Check Response.
 * XSD Type: CheckStatusResponseStructure
 */
class CheckStatusResponseStructureType extends ResponseStructureType
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
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning condition that applies to the status check.
     *
     * @property \Calcinai\Siri\CheckStatusResponseStructureType\ErrorConditionAType $errorCondition
     */
    private $errorCondition = null;

    /**
     * End of data horizon of the data producer.
     *
     * @property \DateTime $validUntil
     */
    private $validUntil = null;

    /**
     * Minimum interval at which updates can be sent.
     *
     * @property \DateInterval $shortestPossibleCycle
     */
    private $shortestPossibleCycle = null;

    /**
     * Time at which current instantiation of service started.
     *
     * @property \DateTime $serviceStartedTime
     */
    private $serviceStartedTime = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

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

    /**
     * Gets as status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param bool $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as errorCondition
     *
     * Description of any error or warning condition that applies to the status check.
     *
     * @return \Calcinai\Siri\CheckStatusResponseStructureType\ErrorConditionAType
     */
    public function getErrorCondition()
    {
        return $this->errorCondition;
    }

    /**
     * Sets a new errorCondition
     *
     * Description of any error or warning condition that applies to the status check.
     *
     * @param \Calcinai\Siri\CheckStatusResponseStructureType\ErrorConditionAType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\CheckStatusResponseStructureType\ErrorConditionAType $errorCondition)
    {
        $this->errorCondition = $errorCondition;
        return $this;
    }

    /**
     * Gets as validUntil
     *
     * End of data horizon of the data producer.
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Sets a new validUntil
     *
     * End of data horizon of the data producer.
     *
     * @param \DateTime $validUntil
     * @return self
     */
    public function setValidUntil(\DateTime $validUntil)
    {
        $this->validUntil = $validUntil;
        return $this;
    }

    /**
     * Gets as shortestPossibleCycle
     *
     * Minimum interval at which updates can be sent.
     *
     * @return \DateInterval
     */
    public function getShortestPossibleCycle()
    {
        return $this->shortestPossibleCycle;
    }

    /**
     * Sets a new shortestPossibleCycle
     *
     * Minimum interval at which updates can be sent.
     *
     * @param \DateInterval $shortestPossibleCycle
     * @return self
     */
    public function setShortestPossibleCycle(\DateInterval $shortestPossibleCycle)
    {
        $this->shortestPossibleCycle = $shortestPossibleCycle;
        return $this;
    }

    /**
     * Gets as serviceStartedTime
     *
     * Time at which current instantiation of service started.
     *
     * @return \DateTime
     */
    public function getServiceStartedTime()
    {
        return $this->serviceStartedTime;
    }

    /**
     * Sets a new serviceStartedTime
     *
     * Time at which current instantiation of service started.
     *
     * @param \DateTime $serviceStartedTime
     * @return self
     */
    public function setServiceStartedTime(\DateTime $serviceStartedTime)
    {
        $this->serviceStartedTime = $serviceStartedTime;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

