<?php

namespace Calcinai\Siri;

/**
 * Class representing StopMonitoringCapabilityRequestPolicyStructureType
 *
 * Type for Monitoring Service Capability Request Policy
 * XSD Type: StopMonitoringCapabilityRequestPolicyStructure
 */
class StopMonitoringCapabilityRequestPolicyStructureType extends CapabilityRequestPolicyStructureType
{

    /**
     * Whether results can return references for stops. Default is true.
     *
     * @property bool $useReferences
     */
    private $useReferences = null;

    /**
     * Whether results can return names for stop
     *
     * @property bool $useNames
     */
    private $useNames = null;

    /**
     * Gets as useReferences
     *
     * Whether results can return references for stops. Default is true.
     *
     * @return bool
     */
    public function getUseReferences()
    {
        return $this->useReferences;
    }

    /**
     * Sets a new useReferences
     *
     * Whether results can return references for stops. Default is true.
     *
     * @param bool $useReferences
     * @return self
     */
    public function setUseReferences($useReferences)
    {
        $this->useReferences = $useReferences;
        return $this;
    }

    /**
     * Gets as useNames
     *
     * Whether results can return names for stop
     *
     * @return bool
     */
    public function getUseNames()
    {
        return $this->useNames;
    }

    /**
     * Sets a new useNames
     *
     * Whether results can return names for stop
     *
     * @param bool $useNames
     * @return self
     */
    public function setUseNames($useNames)
    {
        $this->useNames = $useNames;
        return $this;
    }


}

