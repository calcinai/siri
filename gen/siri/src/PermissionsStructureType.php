<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PermissionsStructureType
 *
 * Type for abstract permissions.
 * XSD Type: PermissionsStructure
 */
class PermissionsStructureType
{

    /**
     * Version of permission set
     *
     * @property string $permissionVersionRef
     */
    private $permissionVersionRef = null;

    /**
     * Gets as permissionVersionRef
     *
     * Version of permission set
     *
     * @return string
     */
    public function getPermissionVersionRef()
    {
        return $this->permissionVersionRef;
    }

    /**
     * Sets a new permissionVersionRef
     *
     * Version of permission set
     *
     * @param string $permissionVersionRef
     * @return self
     */
    public function setPermissionVersionRef($permissionVersionRef)
    {
        $this->permissionVersionRef = $permissionVersionRef;
        return $this;
    }


}

