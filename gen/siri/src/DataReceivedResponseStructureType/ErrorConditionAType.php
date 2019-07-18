<?php

namespace Calcinai\Siri\DataReceivedResponseStructureType;

/**
 * Class representing ErrorConditionAType
 */
class ErrorConditionAType
{

    /**
     * @property \Calcinai\Siri\UnknownSubscriptionError $unknownSubscriptionError
     */
    private $unknownSubscriptionError = null;

    /**
     * @property \Calcinai\Siri\OtherError $otherError
     */
    private $otherError = null;

    /**
     * Text description of error.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as unknownSubscriptionError
     *
     * @return \Calcinai\Siri\UnknownSubscriptionError
     */
    public function getUnknownSubscriptionError()
    {
        return $this->unknownSubscriptionError;
    }

    /**
     * Sets a new unknownSubscriptionError
     *
     * @param \Calcinai\Siri\UnknownSubscriptionError $unknownSubscriptionError
     * @return self
     */
    public function setUnknownSubscriptionError(\Calcinai\Siri\UnknownSubscriptionError $unknownSubscriptionError)
    {
        $this->unknownSubscriptionError = $unknownSubscriptionError;
        return $this;
    }

    /**
     * Gets as otherError
     *
     * @return \Calcinai\Siri\OtherError
     */
    public function getOtherError()
    {
        return $this->otherError;
    }

    /**
     * Sets a new otherError
     *
     * @param \Calcinai\Siri\OtherError $otherError
     * @return self
     */
    public function setOtherError(\Calcinai\Siri\OtherError $otherError)
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

