<?php

namespace Calcinai\Siri;

/**
 * Class representing VehicleMonitoringPermissions
 *
 * Participant's permissions to use the service.
 */
class VehicleMonitoringPermissions extends PermissionsStructureType
{

    /**
     * @property \Calcinai\Siri\VehicleMonitoringServicePermissionStructureType[] $vehicleMonitoringPermission
     */
    private $vehicleMonitoringPermission = [
        
    ];

    /**
     * Adds as vehicleMonitoringPermission
     *
     * @return self
     * @param \Calcinai\Siri\VehicleMonitoringServicePermissionStructureType $vehicleMonitoringPermission
     */
    public function addToVehicleMonitoringPermission(\Calcinai\Siri\VehicleMonitoringServicePermissionStructureType $vehicleMonitoringPermission)
    {
        $this->vehicleMonitoringPermission[] = $vehicleMonitoringPermission;
        return $this;
    }

    /**
     * isset vehicleMonitoringPermission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleMonitoringPermission($index)
    {
        return isset($this->vehicleMonitoringPermission[$index]);
    }

    /**
     * unset vehicleMonitoringPermission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleMonitoringPermission($index)
    {
        unset($this->vehicleMonitoringPermission[$index]);
    }

    /**
     * Gets as vehicleMonitoringPermission
     *
     * @return \Calcinai\Siri\VehicleMonitoringServicePermissionStructureType[]
     */
    public function getVehicleMonitoringPermission()
    {
        return $this->vehicleMonitoringPermission;
    }

    /**
     * Sets a new vehicleMonitoringPermission
     *
     * @param \Calcinai\Siri\VehicleMonitoringServicePermissionStructureType[] $vehicleMonitoringPermission
     * @return self
     */
    public function setVehicleMonitoringPermission(array $vehicleMonitoringPermission)
    {
        $this->vehicleMonitoringPermission = $vehicleMonitoringPermission;
        return $this;
    }


}

