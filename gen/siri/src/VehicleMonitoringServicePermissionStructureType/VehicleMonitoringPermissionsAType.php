<?php

namespace Calcinai\Siri\Objects\VehicleMonitoringServicePermissionStructureType;

/**
 * Class representing VehicleMonitoringPermissionsAType
 */
class VehicleMonitoringPermissionsAType
{

    /**
     * @property bool $allowAll
     */
    private $allowAll = null;

    /**
     * Participants permission for this Monitoring Point
     *
     * @property \Calcinai\Siri\Objects\VehicleMonitorPermissionStructureType[] $vehicleMonitorPermission
     */
    private $vehicleMonitorPermission = [
        
    ];

    /**
     * Gets as allowAll
     *
     * @return bool
     */
    public function getAllowAll()
    {
        return $this->allowAll;
    }

    /**
     * Sets a new allowAll
     *
     * @param bool $allowAll
     * @return self
     */
    public function setAllowAll($allowAll)
    {
        $this->allowAll = $allowAll;
        return $this;
    }

    /**
     * Adds as vehicleMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return self
     * @param \Calcinai\Siri\Objects\VehicleMonitorPermissionStructureType $vehicleMonitorPermission
     */
    public function addToVehicleMonitorPermission(\Calcinai\Siri\Objects\VehicleMonitorPermissionStructureType $vehicleMonitorPermission)
    {
        $this->vehicleMonitorPermission[] = $vehicleMonitorPermission;
        return $this;
    }

    /**
     * isset vehicleMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleMonitorPermission($index)
    {
        return isset($this->vehicleMonitorPermission[$index]);
    }

    /**
     * unset vehicleMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleMonitorPermission($index)
    {
        unset($this->vehicleMonitorPermission[$index]);
    }

    /**
     * Gets as vehicleMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitorPermissionStructureType[]
     */
    public function getVehicleMonitorPermission()
    {
        return $this->vehicleMonitorPermission;
    }

    /**
     * Sets a new vehicleMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitorPermissionStructureType[] $vehicleMonitorPermission
     * @return self
     */
    public function setVehicleMonitorPermission(array $vehicleMonitorPermission)
    {
        $this->vehicleMonitorPermission = $vehicleMonitorPermission;
        return $this;
    }


}

