<?php

namespace Calcinai\Siri\Objects\CheckStatusResponseStructureType;

/**
 * Class representing ErrorConditionAType
 */
class ErrorConditionAType
{

    /**
     * @property \Calcinai\Siri\Objects\ServiceNotAvailableError $serviceNotAvailableError
     */
    private $serviceNotAvailableError = null;

    /**
     * @property \Calcinai\Siri\Objects\OtherError $otherError
     */
    private $otherError = null;

    /**
     * Text description of error.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as serviceNotAvailableError
     *
     * @return \Calcinai\Siri\Objects\ServiceNotAvailableError
     */
    public function getServiceNotAvailableError()
    {
        return $this->serviceNotAvailableError;
    }

    /**
     * Sets a new serviceNotAvailableError
     *
     * @param \Calcinai\Siri\Objects\ServiceNotAvailableError $serviceNotAvailableError
     * @return self
     */
    public function setServiceNotAvailableError(\Calcinai\Siri\Objects\ServiceNotAvailableError $serviceNotAvailableError)
    {
        $this->serviceNotAvailableError = $serviceNotAvailableError;
        return $this;
    }

    /**
     * Gets as otherError
     *
     * @return \Calcinai\Siri\Objects\OtherError
     */
    public function getOtherError()
    {
        return $this->otherError;
    }

    /**
     * Sets a new otherError
     *
     * @param \Calcinai\Siri\Objects\OtherError $otherError
     * @return self
     */
    public function setOtherError(\Calcinai\Siri\Objects\OtherError $otherError)
    {
        $this->otherError = $otherError;
        return $this;
    }

    /**
     * Gets as description
     *
     * Text description of error.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text description of error.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

