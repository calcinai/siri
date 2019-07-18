<?php

namespace Calcinai\Siri;

/**
 * Class representing LinePermissions
 *
 * The lines that the participant may access.
 */
class LinePermissions
{

    /**
     * @property bool $allowAll
     */
    private $allowAll = null;

    /**
     * Participants permission for this Line
     *
     * @property \Calcinai\Siri\LinePermissionStructureType[] $linePermission
     */
    private $linePermission = [
        
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
     * Adds as linePermission
     *
     * Participants permission for this Line
     *
     * @return self
     * @param \Calcinai\Siri\LinePermissionStructureType $linePermission
     */
    public function addToLinePermission(\Calcinai\Siri\LinePermissionStructureType $linePermission)
    {
        $this->linePermission[] = $linePermission;
        return $this;
    }

    /**
     * isset linePermission
     *
     * Participants permission for this Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinePermission($index)
    {
        return isset($this->linePermission[$index]);
    }

    /**
     * unset linePermission
     *
     * Participants permission for this Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinePermission($index)
    {
        unset($this->linePermission[$index]);
    }

    /**
     * Gets as linePermission
     *
     * Participants permission for this Line
     *
     * @return \Calcinai\Siri\LinePermissionStructureType[]
     */
    public function getLinePermission()
    {
        return $this->linePermission;
    }

    /**
     * Sets a new linePermission
     *
     * Participants permission for this Line
     *
     * @param \Calcinai\Siri\LinePermissionStructureType[] $linePermission
     * @return self
     */
    public function setLinePermission(array $linePermission)
    {
        $this->linePermission = $linePermission;
        return $this;
    }


}

