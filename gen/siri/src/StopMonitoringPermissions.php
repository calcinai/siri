<?php

namespace Calcinai\Siri;

/**
 * Class representing StopMonitoringPermissions
 *
 * Participants permissions to use the service, Only returned if requested.
 */
class StopMonitoringPermissions extends PermissionsStructureType
{

    /**
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @property \Calcinai\Siri\StopMonitoringServicePermissionStructureType[] $stopMonitoringPermission
     */
    private $stopMonitoringPermission = [
        
    ];

    /**
     * Adds as stopMonitoringPermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return self
     * @param \Calcinai\Siri\StopMonitoringServicePermissionStructureType $stopMonitoringPermission
     */
    public function addToStopMonitoringPermission(\Calcinai\Siri\StopMonitoringServicePermissionStructureType $stopMonitoringPermission)
    {
        $this->stopMonitoringPermission[] = $stopMonitoringPermission;
        return $this;
    }

    /**
     * isset stopMonitoringPermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopMonitoringPermission($index)
    {
        return isset($this->stopMonitoringPermission[$index]);
    }

    /**
     * unset stopMonitoringPermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopMonitoringPermission($index)
    {
        unset($this->stopMonitoringPermission[$index]);
    }

    /**
     * Gets as stopMonitoringPermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return \Calcinai\Siri\StopMonitoringServicePermissionStructureType[]
     */
    public function getStopMonitoringPermission()
    {
        return $this->stopMonitoringPermission;
    }

    /**
     * Sets a new stopMonitoringPermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param \Calcinai\Siri\StopMonitoringServicePermissionStructureType[] $stopMonitoringPermission
     * @return self
     */
    public function setStopMonitoringPermission(array $stopMonitoringPermission)
    {
        $this->stopMonitoringPermission = $stopMonitoringPermission;
        return $this;
    }


}

