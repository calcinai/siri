<?php

namespace Calcinai\Siri;

/**
 * Class representing OperatorPermissions
 *
 * The Operator data that the participant may access.
 */
class OperatorPermissions
{

    /**
     * @property bool $allowAll
     */
    private $allowAll = null;

    /**
     * Participants permission for this Line
     *
     * @property \Calcinai\Siri\OperatorPermissionStructureType[] $operatorPermission
     */
    private $operatorPermission = [
        
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
     * Adds as operatorPermission
     *
     * Participants permission for this Line
     *
     * @return self
     * @param \Calcinai\Siri\OperatorPermissionStructureType $operatorPermission
     */
    public function addToOperatorPermission(\Calcinai\Siri\OperatorPermissionStructureType $operatorPermission)
    {
        $this->operatorPermission[] = $operatorPermission;
        return $this;
    }

    /**
     * isset operatorPermission
     *
     * Participants permission for this Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperatorPermission($index)
    {
        return isset($this->operatorPermission[$index]);
    }

    /**
     * unset operatorPermission
     *
     * Participants permission for this Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperatorPermission($index)
    {
        unset($this->operatorPermission[$index]);
    }

    /**
     * Gets as operatorPermission
     *
     * Participants permission for this Line
     *
     * @return \Calcinai\Siri\OperatorPermissionStructureType[]
     */
    public function getOperatorPermission()
    {
        return $this->operatorPermission;
    }

    /**
     * Sets a new operatorPermission
     *
     * Participants permission for this Line
     *
     * @param \Calcinai\Siri\OperatorPermissionStructureType[] $operatorPermission
     * @return self
     */
    public function setOperatorPermission(array $operatorPermission)
    {
        $this->operatorPermission = $operatorPermission;
        return $this;
    }


}

