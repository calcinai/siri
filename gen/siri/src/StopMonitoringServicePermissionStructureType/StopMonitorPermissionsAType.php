<?php

namespace Calcinai\Siri\StopMonitoringServicePermissionStructureType;

/**
 * Class representing StopMonitorPermissionsAType
 */
class StopMonitorPermissionsAType
{

    /**
     * @property bool $allowAll
     */
    private $allowAll = null;

    /**
     * Participants permission for this Monitoring Point
     *
     * @property \Calcinai\Siri\StopMonitorPermissionStructureType[] $stopMonitorPermission
     */
    private $stopMonitorPermission = [
        
    ];

    /**
     * Gets as allowAll
     *
     * @return bool
     */
    public function getAllowAll()
    {
        return $this->allowAll;
    }

    /**
     * Sets a new allowAll
     *
     * @param bool $allowAll
     * @return self
     */
    public function setAllowAll($allowAll)
    {
        $this->allowAll = $allowAll;
        return $this;
    }

    /**
     * Adds as stopMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return self
     * @param \Calcinai\Siri\StopMonitorPermissionStructureType $stopMonitorPermission
     */
    public function addToStopMonitorPermission(\Calcinai\Siri\StopMonitorPermissionStructureType $stopMonitorPermission)
    {
        $this->stopMonitorPermission[] = $stopMonitorPermission;
        return $this;
    }

    /**
     * isset stopMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStopMonitorPermission($index)
    {
        return isset($this->stopMonitorPermission[$index]);
    }

    /**
     * unset stopMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStopMonitorPermission($index)
    {
        unset($this->stopMonitorPermission[$index]);
    }

    /**
     * Gets as stopMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return \Calcinai\Siri\StopMonitorPermissionStructureType[]
     */
    public function getStopMonitorPermission()
    {
        return $this->stopMonitorPermission;
    }

    /**
     * Sets a new stopMonitorPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param \Calcinai\Siri\StopMonitorPermissionStructureType[] $stopMonitorPermission
     * @return self
     */
    public function setStopMonitorPermission(array $stopMonitorPermission)
    {
        $this->stopMonitorPermission = $stopMonitorPermission;
        return $this;
    }


}

