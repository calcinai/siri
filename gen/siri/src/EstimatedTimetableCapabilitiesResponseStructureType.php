<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\EstimatedTimetableServiceCapabilities $estimatedTimetableServiceCapabilities
     */
    private $estimatedTimetableServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\EstimatedTimetablePermissions $estimatedTimetablePermissions
     */
    private $estimatedTimetablePermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
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
     * @return \Calcinai\Siri\Objects\EstimatedTimetableServiceCapabilities
     */
    public function getEstimatedTimetableServiceCapabilities()
    {
        return $this->estimatedTimetableServiceCapabilities;
    }

    /**
     * Sets a new estimatedTimetableServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetableServiceCapabilities $estimatedTimetableServiceCapabilities
     * @return self
     */
    public function setEstimatedTimetableServiceCapabilities(\Calcinai\Siri\Objects\EstimatedTimetableServiceCapabilities $estimatedTimetableServiceCapabilities)
    {
        $this->estimatedTimetableServiceCapabilities = $estimatedTimetableServiceCapabilities;
        return $this;
    }

    /**
     * Gets as estimatedTimetablePermissions
     *
     * @return \Calcinai\Siri\Objects\EstimatedTimetablePermissions
     */
    public function getEstimatedTimetablePermissions()
    {
        return $this->estimatedTimetablePermissions;
    }

    /**
     * Sets a new estimatedTimetablePermissions
     *
     * @param \Calcinai\Siri\Objects\EstimatedTimetablePermissions $estimatedTimetablePermissions
     * @return self
     */
    public function setEstimatedTimetablePermissions(\Calcinai\Siri\Objects\EstimatedTimetablePermissions $estimatedTimetablePermissions)
    {
        $this->estimatedTimetablePermissions = $estimatedTimetablePermissions;
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

