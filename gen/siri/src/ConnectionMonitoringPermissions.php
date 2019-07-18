<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ConnectionMonitoringPermissions
 *
 * Participants permissions to use the service.
 */
class ConnectionMonitoringPermissions
{

    /**
     * @property \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $connectionMonitoringPermission
     */
    private $connectionMonitoringPermission = [
        
    ];

    /**
     * Adds as connectionMonitoringPermission
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $connectionMonitoringPermission
     */
    public function addToConnectionMonitoringPermission(\Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $connectionMonitoringPermission)
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
     * @return \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[]
     */
    public function getConnectionMonitoringPermission()
    {
        return $this->connectionMonitoringPermission;
    }

    /**
     * Sets a new connectionMonitoringPermission
     *
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $connectionMonitoringPermission
     * @return self
     */
    public function setConnectionMonitoringPermission(array $connectionMonitoringPermission)
    {
        $this->connectionMonitoringPermission = $connectionMonitoringPermission;
        return $this;
    }


}

