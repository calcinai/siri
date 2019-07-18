<?php

namespace Calcinai\Siri;

/**
 * Class representing ProductionTimetablePermissions
 *
 * Participant's permissions to use the service.
 */
class ProductionTimetablePermissions extends PermissionsStructureType
{

    /**
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @property \Calcinai\Siri\ConnectionServicePermissionStructureType[] $productionTimetablePermission
     */
    private $productionTimetablePermission = [
        
    ];

    /**
     * Adds as productionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return self
     * @param \Calcinai\Siri\ConnectionServicePermissionStructureType $productionTimetablePermission
     */
    public function addToProductionTimetablePermission(\Calcinai\Siri\ConnectionServicePermissionStructureType $productionTimetablePermission)
    {
        $this->productionTimetablePermission[] = $productionTimetablePermission;
        return $this;
    }

    /**
     * isset productionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductionTimetablePermission($index)
    {
        return isset($this->productionTimetablePermission[$index]);
    }

    /**
     * unset productionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductionTimetablePermission($index)
    {
        unset($this->productionTimetablePermission[$index]);
    }

    /**
     * Gets as productionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @return \Calcinai\Siri\ConnectionServicePermissionStructureType[]
     */
    public function getProductionTimetablePermission()
    {
        return $this->productionTimetablePermission;
    }

    /**
     * Sets a new productionTimetablePermission
     *
     * Permission for a single participant or all participants to use an aspect of the service.
     *
     * @param \Calcinai\Siri\ConnectionServicePermissionStructureType[] $productionTimetablePermission
     * @return self
     */
    public function setProductionTimetablePermission(array $productionTimetablePermission)
    {
        $this->productionTimetablePermission = $productionTimetablePermission;
        return $this;
    }


}

