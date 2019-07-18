<?php

namespace Calcinai\Siri;

/**
 * Class representing ServiceDeliveryErrorConditionStructureType
 *
 * Type for Standard ErrorConditiosn for Service request
 * XSD Type: ServiceDeliveryErrorConditionStructure
 */
class ServiceDeliveryErrorConditionStructureType
{

    /**
     * @property \Calcinai\Siri\CapabilityNotSupportedError $capabilityNotSupportedError
     */
    private $capabilityNotSupportedError = null;

    /**
     * @property \Calcinai\Siri\AccessNotAllowedError $accessNotAllowedError
     */
    private $accessNotAllowedError = null;

    /**
     * @property \Calcinai\Siri\NoInfoForTopicError $noInfoForTopicError
     */
    private $noInfoForTopicError = null;

    /**
     * @property \Calcinai\Siri\AllowedResourceUsageExceededError $allowedResourceUsageExceededError
     */
    private $allowedResourceUsageExceededError = null;

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
     * Gets as capabilityNotSupportedError
     *
     * @return \Calcinai\Siri\CapabilityNotSupportedError
     */
    public function getCapabilityNotSupportedError()
    {
        return $this->capabilityNotSupportedError;
    }

    /**
     * Sets a new capabilityNotSupportedError
     *
     * @param \Calcinai\Siri\CapabilityNotSupportedError $capabilityNotSupportedError
     * @return self
     */
    public function setCapabilityNotSupportedError(\Calcinai\Siri\CapabilityNotSupportedError $capabilityNotSupportedError)
    {
        $this->capabilityNotSupportedError = $capabilityNotSupportedError;
        return $this;
    }

    /**
     * Gets as accessNotAllowedError
     *
     * @return \Calcinai\Siri\AccessNotAllowedError
     */
    public function getAccessNotAllowedError()
    {
        return $this->accessNotAllowedError;
    }

    /**
     * Sets a new accessNotAllowedError
     *
     * @param \Calcinai\Siri\AccessNotAllowedError $accessNotAllowedError
     * @return self
     */
    public function setAccessNotAllowedError(\Calcinai\Siri\AccessNotAllowedError $accessNotAllowedError)
    {
        $this->accessNotAllowedError = $accessNotAllowedError;
        return $this;
    }

    /**
     * Gets as noInfoForTopicError
     *
     * @return \Calcinai\Siri\NoInfoForTopicError
     */
    public function getNoInfoForTopicError()
    {
        return $this->noInfoForTopicError;
    }

    /**
     * Sets a new noInfoForTopicError
     *
     * @param \Calcinai\Siri\NoInfoForTopicError $noInfoForTopicError
     * @return self
     */
    public function setNoInfoForTopicError(\Calcinai\Siri\NoInfoForTopicError $noInfoForTopicError)
    {
        $this->noInfoForTopicError = $noInfoForTopicError;
        return $this;
    }

    /**
     * Gets as allowedResourceUsageExceededError
     *
     * @return \Calcinai\Siri\AllowedResourceUsageExceededError
     */
    public function getAllowedResourceUsageExceededError()
    {
        return $this->allowedResourceUsageExceededError;
    }

    /**
     * Sets a new allowedResourceUsageExceededError
     *
     * @param \Calcinai\Siri\AllowedResourceUsageExceededError $allowedResourceUsageExceededError
     * @return self
     */
    public function setAllowedResourceUsageExceededError(\Calcinai\Siri\AllowedResourceUsageExceededError $allowedResourceUsageExceededError)
    {
        $this->allowedResourceUsageExceededError = $allowedResourceUsageExceededError;
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

