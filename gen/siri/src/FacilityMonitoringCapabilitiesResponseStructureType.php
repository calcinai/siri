<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\FacilityMonitoringServiceCapabilities $facilityMonitoringServiceCapabilities
     */
    private $facilityMonitoringServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\FacilityMonitoringPermissions $facilityMonitoringPermissions
     */
    private $facilityMonitoringPermissions = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
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
     * @return \Calcinai\Siri\FacilityMonitoringServiceCapabilities
     */
    public function getFacilityMonitoringServiceCapabilities()
    {
        return $this->facilityMonitoringServiceCapabilities;
    }

    /**
     * Sets a new facilityMonitoringServiceCapabilities
     *
     * @param \Calcinai\Siri\FacilityMonitoringServiceCapabilities $facilityMonitoringServiceCapabilities
     * @return self
     */
    public function setFacilityMonitoringServiceCapabilities(\Calcinai\Siri\FacilityMonitoringServiceCapabilities $facilityMonitoringServiceCapabilities)
    {
        $this->facilityMonitoringServiceCapabilities = $facilityMonitoringServiceCapabilities;
        return $this;
    }

    /**
     * Gets as facilityMonitoringPermissions
     *
     * @return \Calcinai\Siri\FacilityMonitoringPermissions
     */
    public function getFacilityMonitoringPermissions()
    {
        return $this->facilityMonitoringPermissions;
    }

    /**
     * Sets a new facilityMonitoringPermissions
     *
     * @param \Calcinai\Siri\FacilityMonitoringPermissions $facilityMonitoringPermissions
     * @return self
     */
    public function setFacilityMonitoringPermissions(\Calcinai\Siri\FacilityMonitoringPermissions $facilityMonitoringPermissions)
    {
        $this->facilityMonitoringPermissions = $facilityMonitoringPermissions;
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

