<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FacilityMonitoringPermissions
 *
 * Participant's permissions to use the service.
 */
class FacilityMonitoringPermissions extends PermissionsStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\FacilityMonitoringServicePermissionStructureType[] $facilityMonitoringPermission
     */
    private $facilityMonitoringPermission = [
        
    ];

    /**
     * Adds as facilityMonitoringPermission
     *
     * @return self
     * @param \Calcinai\Siri\Objects\FacilityMonitoringServicePermissionStructureType $facilityMonitoringPermission
     */
    public function addToFacilityMonitoringPermission(\Calcinai\Siri\Objects\FacilityMonitoringServicePermissionStructureType $facilityMonitoringPermission)
    {
        $this->facilityMonitoringPermission[] = $facilityMonitoringPermission;
        return $this;
    }

    /**
     * isset facilityMonitoringPermission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityMonitoringPermission($index)
    {
        return isset($this->facilityMonitoringPermission[$index]);
    }

    /**
     * unset facilityMonitoringPermission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityMonitoringPermission($index)
    {
        unset($this->facilityMonitoringPermission[$index]);
    }

    /**
     * Gets as facilityMonitoringPermission
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringServicePermissionStructureType[]
     */
    public function getFacilityMonitoringPermission()
    {
        return $this->facilityMonitoringPermission;
    }

    /**
     * Sets a new facilityMonitoringPermission
     *
     * @param \Calcinai\Siri\Objects\FacilityMonitoringServicePermissionStructureType[] $facilityMonitoringPermission
     * @return self
     */
    public function setFacilityMonitoringPermission(array $facilityMonitoringPermission)
    {
        $this->facilityMonitoringPermission = $facilityMonitoringPermission;
        return $this;
    }


}

