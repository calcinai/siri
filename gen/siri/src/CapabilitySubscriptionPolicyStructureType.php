<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing CapabilitySubscriptionPolicyStructureType
 *
 * Type for Common Subscription capabilities.
 * XSD Type: CapabilitySubscriptionPolicyStructure
 */
class CapabilitySubscriptionPolicyStructureType
{

    /**
     * Whether incremental updates can be specified for updates Default true.
     *
     * @property bool $hasIncrementalUpdates
     */
    private $hasIncrementalUpdates = null;

    /**
     * Whether change threshold can be specified for updates. Default is true.
     *
     * @property bool $hasChangeSensitivity
     */
    private $hasChangeSensitivity = null;

    /**
     * Gets as hasIncrementalUpdates
     *
     * Whether incremental updates can be specified for updates Default true.
     *
     * @return bool
     */
    public function getHasIncrementalUpdates()
    {
        return $this->hasIncrementalUpdates;
    }

    /**
     * Sets a new hasIncrementalUpdates
     *
     * Whether incremental updates can be specified for updates Default true.
     *
     * @param bool $hasIncrementalUpdates
     * @return self
     */
    public function setHasIncrementalUpdates($hasIncrementalUpdates)
    {
        $this->hasIncrementalUpdates = $hasIncrementalUpdates;
        return $this;
    }

    /**
     * Gets as hasChangeSensitivity
     *
     * Whether change threshold can be specified for updates. Default is true.
     *
     * @return bool
     */
    public function getHasChangeSensitivity()
    {
        return $this->hasChangeSensitivity;
    }

    /**
     * Sets a new hasChangeSensitivity
     *
     * Whether change threshold can be specified for updates. Default is true.
     *
     * @param bool $hasChangeSensitivity
     * @return self
     */
    public function setHasChangeSensitivity($hasChangeSensitivity)
    {
        $this->hasChangeSensitivity = $hasChangeSensitivity;
        return $this;
    }


}

