<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractServiceCapabilitiesResponseStructureType
 *
 * Type for capabilities response.
 * XSD Type: AbstractServiceCapabilitiesResponseStructure
 */
class AbstractServiceCapabilitiesResponseStructureType extends ResponseStructureType
{

    /**
     * Arbitrary unique reference to the request which gave rise to this message.
     *
     * @property string $requestMessageRef
     */
    private $requestMessageRef = null;

    /**
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning condition.
     *
     * @property \Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType $errorCondition
     */
    private $errorCondition = null;

    /**
     * Gets as requestMessageRef
     *
     * Arbitrary unique reference to the request which gave rise to this message.
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
     * Arbitrary unique reference to the request which gave rise to this message.
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
     * Description of any error or warning condition.
     *
     * @return \Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType
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
     * @param \Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\Objects\ServiceDeliveryErrorConditionStructureType $errorCondition)
    {
        $this->errorCondition = $errorCondition;
        return $this;
    }


}

