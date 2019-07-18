<?php

namespace Calcinai\Siri;

/**
 * Class representing EstimatedTimetableCapabilitiesResponseStructureType
 *
 * Type for Delivery for Estimated Timetable Capability
 * XSD Type: EstimatedTimetableCapabilitiesResponseStructure
 */
class EstimatedTimetableCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\EstimatedTimetableServiceCapabilities $estimatedTimetableServiceCapabilities
     */
    private $estimatedTimetableServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\EstimatedTimetablePermissions $estimatedTimetablePermissions
     */
    private $estimatedTimetablePermissions = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as version
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
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as estimatedTimetableServiceCapabilities
     *
     * @return \Calcinai\Siri\EstimatedTimetableServiceCapabilities
     */
    public function getEstimatedTimetableServiceCapabilities()
    {
        return $this->estimatedTimetableServiceCapabilities;
    }

    /**
     * Sets a new estimatedTimetableServiceCapabilities
     *
     * @param \Calcinai\Siri\EstimatedTimetableServiceCapabilities $estimatedTimetableServiceCapabilities
     * @return self
     */
    public function setEstimatedTimetableServiceCapabilities(\Calcinai\Siri\EstimatedTimetableServiceCapabilities $estimatedTimetableServiceCapabilities)
    {
        $this->estimatedTimetableServiceCapabilities = $estimatedTimetableServiceCapabilities;
        return $this;
    }

    /**
     * Gets as estimatedTimetablePermissions
     *
     * @return \Calcinai\Siri\EstimatedTimetablePermissions
     */
    public function getEstimatedTimetablePermissions()
    {
        return $this->estimatedTimetablePermissions;
    }

    /**
     * Sets a new estimatedTimetablePermissions
     *
     * @param \Calcinai\Siri\EstimatedTimetablePermissions $estimatedTimetablePermissions
     * @return self
     */
    public function setEstimatedTimetablePermissions(\Calcinai\Siri\EstimatedTimetablePermissions $estimatedTimetablePermissions)
    {
        $this->estimatedTimetablePermissions = $estimatedTimetablePermissions;
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

