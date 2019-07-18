<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing EstimatedTimetablePermissions
 *
 * Participant's permissions to use the service.
 */
class EstimatedTimetablePermissions extends PermissionsStructureType
{

    /**
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $estimatedTimetablePermission
     */
    private $estimatedTimetablePermission = [
        
    ];

    /**
     * Adds as estimatedTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $estimatedTimetablePermission
     */
    public function addToEstimatedTimetablePermission(\Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $estimatedTimetablePermission)
    {
        $this->estimatedTimetablePermission[] = $estimatedTimetablePermission;
        return $this;
    }

    /**
     * isset estimatedTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedTimetablePermission($index)
    {
        return isset($this->estimatedTimetablePermission[$index]);
    }

    /**
     * unset estimatedTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedTimetablePermission($index)
    {
        unset($this->estimatedTimetablePermission[$index]);
    }

    /**
     * Gets as estimatedTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[]
     */
    public function getEstimatedTimetablePermission()
    {
        return $this->estimatedTimetablePermission;
    }

    /**
     * Sets a new estimatedTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $estimatedTimetablePermission
     * @return self
     */
    public function setEstimatedTimetablePermission(array $estimatedTimetablePermission)
    {
        $this->estimatedTimetablePermission = $estimatedTimetablePermission;
        return $this;
    }


}

