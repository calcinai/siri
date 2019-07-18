<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopMonitoringCapabilitiesResponseStructureType
 *
 * Type for Delivery for Stop Monitoring Service.
 * XSD Type: StopMonitoringCapabilitiesResponseStructure
 */
class StopMonitoringCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringServiceCapabilities $stopMonitoringServiceCapabilities
     */
    private $stopMonitoringServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\StopMonitoringPermissions $stopMonitoringPermissions
     */
    private $stopMonitoringPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
     *
     * Version number of response. Fixed
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
     * Version number of response. Fixed
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
     * Gets as stopMonitoringServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringServiceCapabilities
     */
    public function getStopMonitoringServiceCapabilities()
    {
        return $this->stopMonitoringServiceCapabilities;
    }

    /**
     * Sets a new stopMonitoringServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringServiceCapabilities $stopMonitoringServiceCapabilities
     * @return self
     */
    public function setStopMonitoringServiceCapabilities(\Calcinai\Siri\Objects\StopMonitoringServiceCapabilities $stopMonitoringServiceCapabilities)
    {
        $this->stopMonitoringServiceCapabilities = $stopMonitoringServiceCapabilities;
        return $this;
    }

    /**
     * Gets as stopMonitoringPermissions
     *
     * @return \Calcinai\Siri\Objects\StopMonitoringPermissions
     */
    public function getStopMonitoringPermissions()
    {
        return $this->stopMonitoringPermissions;
    }

    /**
     * Sets a new stopMonitoringPermissions
     *
     * @param \Calcinai\Siri\Objects\StopMonitoringPermissions $stopMonitoringPermissions
     * @return self
     */
    public function setStopMonitoringPermissions(\Calcinai\Siri\Objects\StopMonitoringPermissions $stopMonitoringPermissions)
    {
        $this->stopMonitoringPermissions = $stopMonitoringPermissions;
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

