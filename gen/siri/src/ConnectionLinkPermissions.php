<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionLinkPermissions
 *
 * The connection links that the participant may access.
 */
class ConnectionLinkPermissions
{

    /**
     * @property bool $allowAll
     */
    private $allowAll = null;

    /**
     * Participants permission for this Monitoring Point
     *
     * @property \Calcinai\Siri\ConnectionLinkPermissionStructureType[] $connectionLinkPermission
     */
    private $connectionLinkPermission = [
        
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
     * Adds as connectionLinkPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return self
     * @param \Calcinai\Siri\ConnectionLinkPermissionStructureType $connectionLinkPermission
     */
    public function addToConnectionLinkPermission(\Calcinai\Siri\ConnectionLinkPermissionStructureType $connectionLinkPermission)
    {
        $this->connectionLinkPermission[] = $connectionLinkPermission;
        return $this;
    }

    /**
     * isset connectionLinkPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionLinkPermission($index)
    {
        return isset($this->connectionLinkPermission[$index]);
    }

    /**
     * unset connectionLinkPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionLinkPermission($index)
    {
        unset($this->connectionLinkPermission[$index]);
    }

    /**
     * Gets as connectionLinkPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return \Calcinai\Siri\ConnectionLinkPermissionStructureType[]
     */
    public function getConnectionLinkPermission()
    {
        return $this->connectionLinkPermission;
    }

    /**
     * Sets a new connectionLinkPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param \Calcinai\Siri\ConnectionLinkPermissionStructureType[] $connectionLinkPermission
     * @return self
     */
    public function setConnectionLinkPermission(array $connectionLinkPermission)
    {
        $this->connectionLinkPermission = $connectionLinkPermission;
        return $this;
    }


}

