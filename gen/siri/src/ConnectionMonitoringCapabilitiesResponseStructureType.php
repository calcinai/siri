<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\ConnectionMonitoringServiceCapabilities $connectionMonitoringServiceCapabilities
     */
    private $connectionMonitoringServiceCapabilities = null;

    /**
     * @property \Calcinai\Siri\ConnectionServicePermissionStructureType[] $connectionMonitoringPermissions
     */
    private $connectionMonitoringPermissions = null;

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
     * Gets as connectionMonitoringServiceCapabilities
     *
     * @return \Calcinai\Siri\ConnectionMonitoringServiceCapabilities
     */
    public function getConnectionMonitoringServiceCapabilities()
    {
        return $this->connectionMonitoringServiceCapabilities;
    }

    /**
     * Sets a new connectionMonitoringServiceCapabilities
     *
     * @param \Calcinai\Siri\ConnectionMonitoringServiceCapabilities $connectionMonitoringServiceCapabilities
     * @return self
     */
    public function setConnectionMonitoringServiceCapabilities(\Calcinai\Siri\ConnectionMonitoringServiceCapabilities $connectionMonitoringServiceCapabilities)
    {
        $this->connectionMonitoringServiceCapabilities = $connectionMonitoringServiceCapabilities;
        return $this;
    }

    /**
     * Adds as connectionMonitoringPermission
     *
     * @return self
     * @param \Calcinai\Siri\ConnectionServicePermissionStructureType $connectionMonitoringPermission
     */
    public function addToConnectionMonitoringPermissions(\Calcinai\Siri\ConnectionServicePermissionStructureType $connectionMonitoringPermission)
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
     * @return \Calcinai\Siri\ConnectionServicePermissionStructureType[]
     */
    public function getConnectionMonitoringPermissions()
    {
        return $this->connectionMonitoringPermissions;
    }

    /**
     * Sets a new connectionMonitoringPermissions
     *
     * @param \Calcinai\Siri\ConnectionServicePermissionStructureType[] $connectionMonitoringPermissions
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

