<?php

namespace Calcinai\Siri\ConnectionMonitoringPermissions;

/**
 * Class representing ConnectionMonitoringPermissionsAType
 */
class ConnectionMonitoringPermissionsAType
{

    /**
     * @property \Calcinai\Siri\ConnectionServicePermissionStructureType[] $connectionMonitoringPermission
     */
    private $connectionMonitoringPermission = [
        
    ];

    /**
     * Adds as connectionMonitoringPermission
     *
     * @return self
     * @param \Calcinai\Siri\ConnectionServicePermissionStructureType $connectionMonitoringPermission
     */
    public function addToConnectionMonitoringPermission(\Calcinai\Siri\ConnectionServicePermissionStructureType $connectionMonitoringPermission)
    {
        $this->connectionMonitoringPermission[] = $connectionMonitoringPermission;
        return $this;
    }

    /**
     * isset connectionMonitoringPermission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionMonitoringPermission($index)
    {
        return isset($this->connectionMonitoringPermission[$index]);
    }

    /**
     * unset connectionMonitoringPermission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionMonitoringPermission($index)
    {
        unset($this->connectionMonitoringPermission[$index]);
    }

    /**
     * Gets as connectionMonitoringPermission
     *
     * @return \Calcinai\Siri\ConnectionServicePermissionStructureType[]
     */
    public function getConnectionMonitoringPermission()
    {
        return $this->connectionMonitoringPermission;
    }

    /**
     * Sets a new connectionMonitoringPermission
     *
     * @param \Calcinai\Siri\ConnectionServicePermissionStructureType[] $connectionMonitoringPermission
     * @return self
     */
    public function setConnectionMonitoringPermission(array $connectionMonitoringPermission)
    {
        $this->connectionMonitoringPermission = $connectionMonitoringPermission;
        return $this;
    }


}

