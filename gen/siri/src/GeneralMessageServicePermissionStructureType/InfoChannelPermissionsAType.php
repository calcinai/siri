<?php

namespace Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType;

/**
 * Class representing InfoChannelPermissionsAType
 */
class InfoChannelPermissionsAType
{

    /**
     * @property bool $allowAll
     */
    private $allowAll = null;

    /**
     * Participants permission for this Monitoring Point
     *
     * @property \Calcinai\Siri\Objects\InfoChannelPermissionStructureType[] $infoChannelPermission
     */
    private $infoChannelPermission = [
        
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
     * Adds as infoChannelPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return self
     * @param \Calcinai\Siri\Objects\InfoChannelPermissionStructureType $infoChannelPermission
     */
    public function addToInfoChannelPermission(\Calcinai\Siri\Objects\InfoChannelPermissionStructureType $infoChannelPermission)
    {
        $this->infoChannelPermission[] = $infoChannelPermission;
        return $this;
    }

    /**
     * isset infoChannelPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoChannelPermission($index)
    {
        return isset($this->infoChannelPermission[$index]);
    }

    /**
     * unset infoChannelPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoChannelPermission($index)
    {
        unset($this->infoChannelPermission[$index]);
    }

    /**
     * Gets as infoChannelPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @return \Calcinai\Siri\Objects\InfoChannelPermissionStructureType[]
     */
    public function getInfoChannelPermission()
    {
        return $this->infoChannelPermission;
    }

    /**
     * Sets a new infoChannelPermission
     *
     * Participants permission for this Monitoring Point
     *
     * @param \Calcinai\Siri\Objects\InfoChannelPermissionStructureType[] $infoChannelPermission
     * @return self
     */
    public function setInfoChannelPermission(array $infoChannelPermission)
    {
        $this->infoChannelPermission = $infoChannelPermission;
        return $this;
    }


}

