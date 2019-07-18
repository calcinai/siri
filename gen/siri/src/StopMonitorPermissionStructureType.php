<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopMonitorPermissionStructureType
 *
 * Type for Monitoring Point Permission
 * XSD Type: StopMonitorPermissionStructure
 */
class StopMonitorPermissionStructureType extends AbstractTopicPermissionStructureType
{

    /**
     * Identifier of Monitoring point to which permission applies.
     *
     * @property string $monitoringRef
     */
    private $monitoringRef = null;

    /**
     * Gets as monitoringRef
     *
     * Identifier of Monitoring point to which permission applies.
     *
     * @return string
     */
    public function getMonitoringRef()
    {
        return $this->monitoringRef;
    }

    /**
     * Sets a new monitoringRef
     *
     * Identifier of Monitoring point to which permission applies.
     *
     * @param string $monitoringRef
     * @return self
     */
    public function setMonitoringRef($monitoringRef)
    {
        $this->monitoringRef = $monitoringRef;
        return $this;
    }


}

