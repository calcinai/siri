<?php

namespace Calcinai\Siri;

/**
 * Class representing VehicleMonitoringServicePermissionStructureType
 *
 * Type for Monitoring Service Permissions.
 * XSD Type: VehicleMonitoringServicePermissionStructure
 */
class VehicleMonitoringServicePermissionStructureType extends AbstractPermissionStructureType
{

    /**
     * @property \Calcinai\Siri\OperatorPermissions $operatorPermissions
     */
    private $operatorPermissions = null;

    /**
     * @property \Calcinai\Siri\LinePermissions $linePermissions
     */
    private $linePermissions = null;

    /**
     * The monitoring points that the participant may access.
     *
     * @property \Calcinai\Siri\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType $vehicleMonitoringPermissions
     */
    private $vehicleMonitoringPermissions = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as operatorPermissions
     *
     * @return \Calcinai\Siri\OperatorPermissions
     */
    public function getOperatorPermissions()
    {
        return $this->operatorPermissions;
    }

    /**
     * Sets a new operatorPermissions
     *
     * @param \Calcinai\Siri\OperatorPermissions $operatorPermissions
     * @return self
     */
    public function setOperatorPermissions(\Calcinai\Siri\OperatorPermissions $operatorPermissions)
    {
        $this->operatorPermissions = $operatorPermissions;
        return $this;
    }

    /**
     * Gets as linePermissions
     *
     * @return \Calcinai\Siri\LinePermissions
     */
    public function getLinePermissions()
    {
        return $this->linePermissions;
    }

    /**
     * Sets a new linePermissions
     *
     * @param \Calcinai\Siri\LinePermissions $linePermissions
     * @return self
     */
    public function setLinePermissions(\Calcinai\Siri\LinePermissions $linePermissions)
    {
        $this->linePermissions = $linePermissions;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringPermissions
     *
     * The monitoring points that the participant may access.
     *
     * @return \Calcinai\Siri\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType
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
     * @param \Calcinai\Siri\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType $vehicleMonitoringPermissions
     * @return self
     */
    public function setVehicleMonitoringPermissions(\Calcinai\Siri\VehicleMonitoringServicePermissionStructureType\VehicleMonitoringPermissionsAType $vehicleMonitoringPermissions)
    {
        $this->vehicleMonitoringPermissions = $vehicleMonitoringPermissions;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

