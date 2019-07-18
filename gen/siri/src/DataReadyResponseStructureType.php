<?php

namespace Calcinai\Siri;

/**
 * Class representing DataReadyResponseStructureType
 *
 * Type for Data ready Acknowledgement Response.
 * XSD Type: DataReadyResponseStructure
 */
class DataReadyResponseStructureType extends ConsumerResponseEndpointStructureType
{

    /**
     * @property bool $status
     */
    private $status = null;

    /**
     * Description of any error or warning condition as to why Consumer cannot fetch data.
     *
     * @property \Calcinai\Siri\DataReadyResponseStructureType\ErrorConditionAType $errorCondition
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
     * Description of any error or warning condition as to why Consumer cannot fetch data.
     *
     * @return \Calcinai\Siri\DataReadyResponseStructureType\ErrorConditionAType
     */
    public function getErrorCondition()
    {
        return $this->errorCondition;
    }

    /**
     * Sets a new errorCondition
     *
     * Description of any error or warning condition as to why Consumer cannot fetch data.
     *
     * @param \Calcinai\Siri\DataReadyResponseStructureType\ErrorConditionAType $errorCondition
     * @return self
     */
    public function setErrorCondition(\Calcinai\Siri\DataReadyResponseStructureType\ErrorConditionAType $errorCondition)
    {
        $this->errorCondition = $errorCondition;
        return $this;
    }


}

