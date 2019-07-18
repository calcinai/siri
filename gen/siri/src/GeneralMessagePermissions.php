<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing GeneralMessagePermissions
 *
 * Participant's permissions to use the service.
 */
class GeneralMessagePermissions extends PermissionsStructureType
{

    /**
     * Permission or a single particpant or all participants
     *
     * @property \Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType[] $generalMessagePermission
     */
    private $generalMessagePermission = [
        
    ];

    /**
     * Adds as generalMessagePermission
     *
     * Permission or a single particpant or all participants
     *
     * @return self
     * @param \Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType $generalMessagePermission
     */
    public function addToGeneralMessagePermission(\Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType $generalMessagePermission)
    {
        $this->generalMessagePermission[] = $generalMessagePermission;
        return $this;
    }

    /**
     * isset generalMessagePermission
     *
     * Permission or a single particpant or all participants
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneralMessagePermission($index)
    {
        return isset($this->generalMessagePermission[$index]);
    }

    /**
     * unset generalMessagePermission
     *
     * Permission or a single particpant or all participants
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneralMessagePermission($index)
    {
        unset($this->generalMessagePermission[$index]);
    }

    /**
     * Gets as generalMessagePermission
     *
     * Permission or a single particpant or all participants
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType[]
     */
    public function getGeneralMessagePermission()
    {
        return $this->generalMessagePermission;
    }

    /**
     * Sets a new generalMessagePermission
     *
     * Permission or a single particpant or all participants
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType[] $generalMessagePermission
     * @return self
     */
    public function setGeneralMessagePermission(array $generalMessagePermission)
    {
        $this->generalMessagePermission = $generalMessagePermission;
        return $this;
    }


}

