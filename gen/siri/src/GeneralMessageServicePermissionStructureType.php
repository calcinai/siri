<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing GeneralMessageServicePermissionStructureType
 *
 * Type for General MessageService Permission.
 * XSD Type: GeneralMessageServicePermissionStructure
 */
class GeneralMessageServicePermissionStructureType extends AbstractPermissionStructureType
{

    /**
     * The monitoring points that the participant may access.
     *
     * @property \Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType $infoChannelPermissions
     */
    private $infoChannelPermissions = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as infoChannelPermissions
     *
     * The monitoring points that the participant may access.
     *
     * @return \Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType
     */
    public function getInfoChannelPermissions()
    {
        return $this->infoChannelPermissions;
    }

    /**
     * Sets a new infoChannelPermissions
     *
     * The monitoring points that the participant may access.
     *
     * @param \Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType $infoChannelPermissions
     * @return self
     */
    public function setInfoChannelPermissions(\Calcinai\Siri\Objects\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType $infoChannelPermissions)
    {
        $this->infoChannelPermissions = $infoChannelPermissions;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

