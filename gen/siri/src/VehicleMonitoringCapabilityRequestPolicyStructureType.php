<?php

namespace Calcinai\Siri;

/**
 * Class representing VehicleMonitoringCapabilityRequestPolicyStructureType
 *
 * Type for capability request policy.
 * XSD Type: VehicleMonitoringCapabilityRequestPolicyStructure
 */
class VehicleMonitoringCapabilityRequestPolicyStructureType extends CapabilityRequestPolicyStructureType
{

    /**
     * Whether results should return references.
     *
     * @property bool $hasReferences
     */
    private $hasReferences = null;

    /**
     * Whether results should return references.
     *
     * @property bool $hasNames
     */
    private $hasNames = null;

    /**
     * Gets as hasReferences
     *
     * Whether results should return references.
     *
     * @return bool
     */
    public function getHasReferences()
    {
        return $this->hasReferences;
    }

    /**
     * Sets a new hasReferences
     *
     * Whether results should return references.
     *
     * @param bool $hasReferences
     * @return self
     */
    public function setHasReferences($hasReferences)
    {
        $this->hasReferences = $hasReferences;
        return $this;
    }

    /**
     * Gets as hasNames
     *
     * Whether results should return references.
     *
     * @return bool
     */
    public function getHasNames()
    {
        return $this->hasNames;
    }

    /**
     * Sets a new hasNames
     *
     * Whether results should return references.
     *
     * @param bool $hasNames
     * @return self
     */
    public function setHasNames($hasNames)
    {
        $this->hasNames = $hasNames;
        return $this;
    }


}

