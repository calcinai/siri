<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionTimetableCapabilitiesResponseStructureType
 *
 * Data type for Delivery for Connection TimetableService.
 * XSD Type: ConnectionTimetableCapabilitiesResponseStructure
 */
class ConnectionTimetableCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionTimetableServiceCapabilities $connectionTimetableServiceCapabilities
     */
    private $connectionTimetableServiceCapabilities = null;

    /**
     * Participant's permissions to use the service, Only returned if requested
     *
     * @property \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponseStructureType\ConnectionTimetablePermissionsAType $connectionTimetablePermissions
     */
    private $connectionTimetablePermissions = null;

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
     * Gets as connectionTimetableServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableServiceCapabilities
     */
    public function getConnectionTimetableServiceCapabilities()
    {
        return $this->connectionTimetableServiceCapabilities;
    }

    /**
     * Sets a new connectionTimetableServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableServiceCapabilities $connectionTimetableServiceCapabilities
     * @return self
     */
    public function setConnectionTimetableServiceCapabilities(\Calcinai\Siri\Objects\ConnectionTimetableServiceCapabilities $connectionTimetableServiceCapabilities)
    {
        $this->connectionTimetableServiceCapabilities = $connectionTimetableServiceCapabilities;
        return $this;
    }

    /**
     * Gets as connectionTimetablePermissions
     *
     * Participant's permissions to use the service, Only returned if requested
     *
     * @return \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponseStructureType\ConnectionTimetablePermissionsAType
     */
    public function getConnectionTimetablePermissions()
    {
        return $this->connectionTimetablePermissions;
    }

    /**
     * Sets a new connectionTimetablePermissions
     *
     * Participant's permissions to use the service, Only returned if requested
     *
     * @param \Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponseStructureType\ConnectionTimetablePermissionsAType $connectionTimetablePermissions
     * @return self
     */
    public function setConnectionTimetablePermissions(\Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponseStructureType\ConnectionTimetablePermissionsAType $connectionTimetablePermissions)
    {
        $this->connectionTimetablePermissions = $connectionTimetablePermissions;
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

