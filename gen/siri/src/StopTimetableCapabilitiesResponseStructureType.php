<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing StopTimetableCapabilitiesResponseStructureType
 *
 * Data type for Delivery for Stop Timetable Service
 * XSD Type: StopTimetableCapabilitiesResponseStructure
 */
class StopTimetableCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\StopTimetableServiceCapabilities $stopTimetableServiceCapabilities
     */
    private $stopTimetableServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\StopTimetablePermissions $stopTimetablePermissions
     */
    private $stopTimetablePermissions = null;

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
     * Gets as stopTimetableServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\StopTimetableServiceCapabilities
     */
    public function getStopTimetableServiceCapabilities()
    {
        return $this->stopTimetableServiceCapabilities;
    }

    /**
     * Sets a new stopTimetableServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\StopTimetableServiceCapabilities $stopTimetableServiceCapabilities
     * @return self
     */
    public function setStopTimetableServiceCapabilities(\Calcinai\Siri\Objects\StopTimetableServiceCapabilities $stopTimetableServiceCapabilities)
    {
        $this->stopTimetableServiceCapabilities = $stopTimetableServiceCapabilities;
        return $this;
    }

    /**
     * Gets as stopTimetablePermissions
     *
     * @return \Calcinai\Siri\Objects\StopTimetablePermissions
     */
    public function getStopTimetablePermissions()
    {
        return $this->stopTimetablePermissions;
    }

    /**
     * Sets a new stopTimetablePermissions
     *
     * @param \Calcinai\Siri\Objects\StopTimetablePermissions $stopTimetablePermissions
     * @return self
     */
    public function setStopTimetablePermissions(\Calcinai\Siri\Objects\StopTimetablePermissions $stopTimetablePermissions)
    {
        $this->stopTimetablePermissions = $stopTimetablePermissions;
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

