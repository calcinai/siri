<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractDiscoveryDeliveryStructureType
 *
 * Abstract supertype fro discovery responses.
 * XSD Type: AbstractDiscoveryDeliveryStructure
 */
class AbstractDiscoveryDeliveryStructureType extends ResponseStructureType
{

    /**
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning condition.
     *
     * @property \Calcinai\Siri\ServiceDeliveryErrorConditionStructureType $errorCondition
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
     * Description of any error or warning condition.
     *
     * @return \Calcinai\Siri\ServiceDeliveryErrorConditionStructureType
     */
    public function getErrorCondition()
    {
        return $this->errorCondition;
    }

    /**
     * Sets a new errorCondition
     *
     * Description of any error or warning condition.
     *
     * @param \Calcinai\Siri\ServiceDeliveryErrorConditionStructureType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\ServiceDeliveryErrorConditionStructureType $errorCondition)
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


}

