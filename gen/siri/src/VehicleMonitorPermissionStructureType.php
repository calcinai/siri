<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleMonitorPermissionStructureType
 *
 * Type for MonitoringPoint Permission.
 * XSD Type: VehicleMonitorPermissionStructure
 */
class VehicleMonitorPermissionStructureType extends AbstractTopicPermissionStructureType
{

    /**
     * VehicleMonitoring refernce for which permission is made.
     *
     * @property string $vehicleMonitoringRef
     */
    private $vehicleMonitoringRef = null;

    /**
     * Gets as vehicleMonitoringRef
     *
     * VehicleMonitoring refernce for which permission is made.
     *
     * @return string
     */
    public function getVehicleMonitoringRef()
    {
        return $this->vehicleMonitoringRef;
    }

    /**
     * Sets a new vehicleMonitoringRef
     *
     * VehicleMonitoring refernce for which permission is made.
     *
     * @param string $vehicleMonitoringRef
     * @return self
     */
    public function setVehicleMonitoringRef($vehicleMonitoringRef)
    {
        $this->vehicleMonitoringRef = $vehicleMonitoringRef;
        return $this;
    }


}

