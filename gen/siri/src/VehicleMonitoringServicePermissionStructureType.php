<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleMonitoringServicePermissionStructureType
 *
 * Type for Monitoring Service Permissions.
 * XSD Type: VehicleMonitoringServicePermissionStructure
 */
class VehicleMonitoringServicePermissionStructureType extends AbstractPermissionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\OperatorPermissions $operatorPermissions
     */
    private $operatorPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\LinePermissions $linePermissions
     */
    private $linePermissions = null;

    /**
     * The monitoring points that the participant may access.
     *
     * @property \Calcinai\Siri\Objects\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType $vehicleMonitoringPermissions
     */
    private $vehicleMonitoringPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as operatorPermissions
     *
     * @return \Calcinai\Siri\Objects\OperatorPermissions
     */
    public function getOperatorPermissions()
    {
        return $this->operatorPermissions;
    }

    /**
     * Sets a new operatorPermissions
     *
     * @param \Calcinai\Siri\Objects\OperatorPermissions $operatorPermissions
     * @return self
     */
    public function setOperatorPermissions(\Calcinai\Siri\Objects\OperatorPermissions $operatorPermissions)
    {
        $this->operatorPermissions = $operatorPermissions;
        return $this;
    }

    /**
     * Gets as linePermissions
     *
     * @return \Calcinai\Siri\Objects\LinePermissions
     */
    public function getLinePermissions()
    {
        return $this->linePermissions;
    }

    /**
     * Sets a new linePermissions
     *
     * @param \Calcinai\Siri\Objects\LinePermissions $linePermissions
     * @return self
     */
    public function setLinePermissions(\Calcinai\Siri\Objects\LinePermissions $linePermissions)
    {
        $this->linePermissions = $linePermissions;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringPermissions
     *
     * The monitoring points that the participant may access.
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType
     */
    public function getVehicleMonitoringPermissions()
    {
        return $this->vehicleMonitoringPermissions;
    }

    /**
     * Sets a new vehicleMonitoringPermissions
     *
     * The monitoring points that the participant may access.
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType $vehicleMonitoringPermissions
     * @return self
     */
    public function setVehicleMonitoringPermissions(\Calcinai\Siri\Objects\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType $vehicleMonitoringPermissions)
    {
        $this->vehicleMonitoringPermissions = $vehicleMonitoringPermissions;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

