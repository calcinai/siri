<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityMonitoringCapabilitiesResponseStructureType
 *
 * Data type for Delivery for Vehicle Monitoring Service
 * XSD Type: FacilityMonitoringCapabilitiesResponseStructure
 */
class FacilityMonitoringCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilities $facilityMonitoringServiceCapabilities
     */
    private $facilityMonitoringServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringPermissions $facilityMonitoringPermissions
     */
    private $facilityMonitoringPermissions = null;

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
     * Gets as facilityMonitoringServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilities
     */
    public function getFacilityMonitoringServiceCapabilities()
    {
        return $this->facilityMonitoringServiceCapabilities;
    }

    /**
     * Sets a new facilityMonitoringServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilities $facilityMonitoringServiceCapabilities
     * @return self
     */
    public function setFacilityMonitoringServiceCapabilities(\Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilities $facilityMonitoringServiceCapabilities)
    {
        $this->facilityMonitoringServiceCapabilities = $facilityMonitoringServiceCapabilities;
        return $this;
    }

    /**
     * Gets as facilityMonitoringPermissions
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringPermissions
     */
    public function getFacilityMonitoringPermissions()
    {
        return $this->facilityMonitoringPermissions;
    }

    /**
     * Sets a new facilityMonitoringPermissions
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringPermissions $facilityMonitoringPermissions
     * @return self
     */
    public function setFacilityMonitoringPermissions(\Calcinai\Siri\Objects\FacilityMonitoringPermissions $facilityMonitoringPermissions)
    {
        $this->facilityMonitoringPermissions = $facilityMonitoringPermissions;
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

