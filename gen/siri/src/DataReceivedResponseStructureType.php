<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing DataReceivedResponseStructureType
 *
 * Type for Data received Acknowledgement Response.
 * XSD Type: DataReceivedResponseStructure
 */
class DataReceivedResponseStructureType extends ConsumerResponseEndpointStructureType
{

    /**
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning condition.
     *
     * @property \Calcinai\Siri\Objects\DataReceivedResponseStructureType\ErrorConditionAType $errorCondition
     */
    private $errorCondition = null;

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
     * @return \Calcinai\Siri\Objects\DataReceivedResponseStructureType\ErrorConditionAType
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
     * @param \Calcinai\Siri\Objects\DataReceivedResponseStructureType\ErrorConditionAType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\Objects\DataReceivedResponseStructureType\ErrorConditionAType $errorCondition)
    {
        $this->errorCondition = $errorCondition;
        return $this;
    }


}

