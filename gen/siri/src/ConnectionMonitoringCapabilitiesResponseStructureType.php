<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionMonitoringCapabilitiesResponseStructureType
 *
 * Type for Delivery for Connection Monitoring Capability.
 * XSD Type: ConnectionMonitoringCapabilitiesResponseStructure
 */
class ConnectionMonitoringCapabilitiesResponseStructureType extends AbstractServiceCapabilitiesResponseStructureType
{

    /**
     * Version number of response. Fixed
     *
     * @property string $version
     */
    private $version = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionMonitoringServiceCapabilities $connectionMonitoringServiceCapabilities
     */
    private $connectionMonitoringServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $connectionMonitoringPermissions
     */
    private $connectionMonitoringPermissions = null;

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
     * Gets as connectionMonitoringServiceCapabilities
     *
     * @return \Calcinai\Siri\Objects\ConnectionMonitoringServiceCapabilities
     */
    public function getConnectionMonitoringServiceCapabilities()
    {
        return $this->connectionMonitoringServiceCapabilities;
    }

    /**
     * Sets a new connectionMonitoringServiceCapabilities
     *
     * @param \Calcinai\Siri\Objects\ConnectionMonitoringServiceCapabilities $connectionMonitoringServiceCapabilities
     * @return self
     */
    public function setConnectionMonitoringServiceCapabilities(\Calcinai\Siri\Objects\ConnectionMonitoringServiceCapabilities $connectionMonitoringServiceCapabilities)
    {
        $this->connectionMonitoringServiceCapabilities = $connectionMonitoringServiceCapabilities;
        return $this;
    }

    /**
     * Adds as connectionMonitoringPermission
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $connectionMonitoringPermission
     */
    public function addToConnectionMonitoringPermissions(\Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $connectionMonitoringPermission)
    {
        $this->connectionMonitoringPermissions[] = $connectionMonitoringPermission;
        return $this;
    }

    /**
     * isset connectionMonitoringPermissions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringPermissions($index)
    {
        return isset($this->connectionMonitoringPermissions[$index]);
    }

    /**
     * unset connectionMonitoringPermissions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringPermissions($index)
    {
        unset($this->connectionMonitoringPermissions[$index]);
    }

    /**
     * Gets as connectionMonitoringPermissions
     *
     * @return \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[]
     */
    public function getConnectionMonitoringPermissions()
    {
        return $this->connectionMonitoringPermissions;
    }

    /**
     * Sets a new connectionMonitoringPermissions
     *
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $connectionMonitoringPermissions
     * @return self
     */
    public function setConnectionMonitoringPermissions(array $connectionMonitoringPermissions)
    {
        $this->connectionMonitoringPermissions = $connectionMonitoringPermissions;
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

