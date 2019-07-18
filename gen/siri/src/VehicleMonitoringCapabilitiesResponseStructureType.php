<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing VehicleMonitoringCapabilitiesResponseStructureType
 *
 * Data type for Delivery for Vehicle Monitoring Service.
 * XSD Type: VehicleMonitoringCapabilitiesResponseStructure
 */
class VehicleMonitoringCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of repsonse. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringServiceCapabilities $vehicleMonitoringServiceCapabilities
     */
    private $vehicleMonitoringServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\VehicleMonitoringPermissions $vehicleMonitoringPermissions
     */
    private $vehicleMonitoringPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of repsonse. Fixed
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version number of repsonse. Fixed
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringServiceCapabilities
     */
    public function getVehicleMonitoringServiceCapabilities()
    {
        return $this->vehicleMonitoringServiceCapabilities;
    }

    /**
     * Sets a new vehicleMonitoringServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringServiceCapabilities $vehicleMonitoringServiceCapabilities
     * @return self
     */
    public function setVehicleMonitoringServiceCapabilities(\Calcinai\Siri\Objects\VehicleMonitoringServiceCapabilities $vehicleMonitoringServiceCapabilities)
    {
        $this->vehicleMonitoringServiceCapabilities = $vehicleMonitoringServiceCapabilities;
        return $this;
    }

    /**
     * Gets as vehicleMonitoringPermissions
     *
     * @return \Calcinai\Siri\Objects\VehicleMonitoringPermissions
     */
    public function getVehicleMonitoringPermissions()
    {
        return $this->vehicleMonitoringPermissions;
    }

    /**
     * Sets a new vehicleMonitoringPermissions
     *
     * @param \Calcinai\Siri\Objects\VehicleMonitoringPermissions $vehicleMonitoringPermissions
     * @return self
     */
    public function setVehicleMonitoringPermissions(\Calcinai\Siri\Objects\VehicleMonitoringPermissions $vehicleMonitoringPermissions)
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

