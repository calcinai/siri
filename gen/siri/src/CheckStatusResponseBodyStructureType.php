<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing CheckStatusResponseBodyStructureType
 *
 * Type for Body of Service Status Check Response. Used in WSDL.Same as CheckStatusResponseStructure, but without extension to be consistent with the other operation definition.
 * XSD Type: CheckStatusResponseBodyStructure
 */
class CheckStatusResponseBodyStructureType
{

    /**
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning condition that applies to the status check.
     *
     * @property \Calcinai\Siri\Objects\CheckStatusResponseStructureType\ErrorConditionAType $errorCondition
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
     * @return \Calcinai\Siri\Objects\CheckStatusResponseStructureType\ErrorConditionAType
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
     * @param \Calcinai\Siri\Objects\CheckStatusResponseStructureType\ErrorConditionAType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\Objects\CheckStatusResponseStructureType\ErrorConditionAType $errorCondition)
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


}

