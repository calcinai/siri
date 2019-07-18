<?php

namespace Calcinai\Siri;

/**
 * Class representing StopTimetablePermissions
 *
 * Participant's permissions to use the service.
 */
class StopTimetablePermissions extends PermissionsStructureType
{

    /**
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @property \Calcinai\Siri\StopMonitoringServicePermissionStructureType[] $stopTimetablePermission
     */
    private $stopTimetablePermission = [
        
    ];

    /**
     * Adds as stopTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return self
     * @param \Calcinai\Siri\StopMonitoringServicePermissionStructureType $stopTimetablePermission
     */
    public function addToStopTimetablePermission(\Calcinai\Siri\StopMonitoringServicePermissionStructureType $stopTimetablePermission)
    {
        $this->stopTimetablePermission[] = $stopTimetablePermission;
        return $this;
    }

    /**
     * isset stopTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopTimetablePermission($index)
    {
        return isset($this->stopTimetablePermission[$index]);
    }

    /**
     * unset stopTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopTimetablePermission($index)
    {
        unset($this->stopTimetablePermission[$index]);
    }

    /**
     * Gets as stopTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return \Calcinai\Siri\StopMonitoringServicePermissionStructureType[]
     */
    public function getStopTimetablePermission()
    {
        return $this->stopTimetablePermission;
    }

    /**
     * Sets a new stopTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param \Calcinai\Siri\StopMonitoringServicePermissionStructureType[] $stopTimetablePermission
     * @return self
     */
    public function setStopTimetablePermission(array $stopTimetablePermission)
    {
        $this->stopTimetablePermission = $stopTimetablePermission;
        return $this;
    }


}

