<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ServiceDeliveryErrorConditionStructureType
 *
 * Type for Standard ErrorConditiosn for Service request
 * XSD Type: ServiceDeliveryErrorConditionStructure
 */
class ServiceDeliveryErrorConditionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\CapabilityNotSupportedError $capabilityNotSupportedError
     */
    private $capabilityNotSupportedError = null;

    /**
     * @property \Calcinai\Siri\Objects\AccessNotAllowedError $accessNotAllowedError
     */
    private $accessNotAllowedError = null;

    /**
     * @property \Calcinai\Siri\Objects\NoInfoForTopicError $noInfoForTopicError
     */
    private $noInfoForTopicError = null;

    /**
     * @property \Calcinai\Siri\Objects\AllowedResourceUsageExceededError $allowedResourceUsageExceededError
     */
    private $allowedResourceUsageExceededError = null;

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
     * Gets as capabilityNotSupportedError
     *
     * @return \Calcinai\Siri\Objects\CapabilityNotSupportedError
     */
    public function getCapabilityNotSupportedError()
    {
        return $this->capabilityNotSupportedError;
    }

    /**
     * Sets a new capabilityNotSupportedError
     *
     * @param \Calcinai\Siri\Objects\CapabilityNotSupportedError $capabilityNotSupportedError
     * @return self
     */
    public function setCapabilityNotSupportedError(\Calcinai\Siri\Objects\CapabilityNotSupportedError $capabilityNotSupportedError)
    {
        $this->capabilityNotSupportedError = $capabilityNotSupportedError;
        return $this;
    }

    /**
     * Gets as accessNotAllowedError
     *
     * @return \Calcinai\Siri\Objects\AccessNotAllowedError
     */
    public function getAccessNotAllowedError()
    {
        return $this->accessNotAllowedError;
    }

    /**
     * Sets a new accessNotAllowedError
     *
     * @param \Calcinai\Siri\Objects\AccessNotAllowedError $accessNotAllowedError
     * @return self
     */
    public function setAccessNotAllowedError(\Calcinai\Siri\Objects\AccessNotAllowedError $accessNotAllowedError)
    {
        $this->accessNotAllowedError = $accessNotAllowedError;
        return $this;
    }

    /**
     * Gets as noInfoForTopicError
     *
     * @return \Calcinai\Siri\Objects\NoInfoForTopicError
     */
    public function getNoInfoForTopicError()
    {
        return $this->noInfoForTopicError;
    }

    /**
     * Sets a new noInfoForTopicError
     *
     * @param \Calcinai\Siri\Objects\NoInfoForTopicError $noInfoForTopicError
     * @return self
     */
    public function setNoInfoForTopicError(\Calcinai\Siri\Objects\NoInfoForTopicError $noInfoForTopicError)
    {
        $this->noInfoForTopicError = $noInfoForTopicError;
        return $this;
    }

    /**
     * Gets as allowedResourceUsageExceededError
     *
     * @return \Calcinai\Siri\Objects\AllowedResourceUsageExceededError
     */
    public function getAllowedResourceUsageExceededError()
    {
        return $this->allowedResourceUsageExceededError;
    }

    /**
     * Sets a new allowedResourceUsageExceededError
     *
     * @param \Calcinai\Siri\Objects\AllowedResourceUsageExceededError $allowedResourceUsageExceededError
     * @return self
     */
    public function setAllowedResourceUsageExceededError(\Calcinai\Siri\Objects\AllowedResourceUsageExceededError $allowedResourceUsageExceededError)
    {
        $this->allowedResourceUsageExceededError = $allowedResourceUsageExceededError;
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

