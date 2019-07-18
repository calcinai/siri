<?php

namespace Calcinai\Siri\Objects\ConnectionTimetableCapabilitiesResponseStructureType;

use Calcinai\Siri\Objects\PermissionsStructureType;

/**
 * Class representing ConnectionTimetablePermissionsAType
 */
class ConnectionTimetablePermissionsAType extends PermissionsStructureType
{

    /**
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @property \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $connectionTimetablePermission
     */
    private $connectionTimetablePermission = [
        
    ];

    /**
     * Adds as connectionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $connectionTimetablePermission
     */
    public function addToConnectionTimetablePermission(\Calcinai\Siri\Objects\ConnectionServicePermissionStructureType $connectionTimetablePermission)
    {
        $this->connectionTimetablePermission[] = $connectionTimetablePermission;
        return $this;
    }

    /**
     * isset connectionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionTimetablePermission($index)
    {
        return isset($this->connectionTimetablePermission[$index]);
    }

    /**
     * unset connectionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionTimetablePermission($index)
    {
        unset($this->connectionTimetablePermission[$index]);
    }

    /**
     * Gets as connectionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[]
     */
    public function getConnectionTimetablePermission()
    {
        return $this->connectionTimetablePermission;
    }

    /**
     * Sets a new connectionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param \Calcinai\Siri\Objects\ConnectionServicePermissionStructureType[] $connectionTimetablePermission
     * @return self
     */
    public function setConnectionTimetablePermission(array $connectionTimetablePermission)
    {
        $this->connectionTimetablePermission = $connectionTimetablePermission;
        return $this;
    }


}

