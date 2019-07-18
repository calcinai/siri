<?php

namespace Calcinai\Siri;

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
     * @property \Calcinai\Siri\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType $infoChannelPermissions
     */
    private $infoChannelPermissions = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as infoChannelPermissions
     *
     * The monitoring points that the participant may access.
     *
     * @return \Calcinai\Siri\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType
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
     * @param \Calcinai\Siri\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType $infoChannelPermissions
     * @return self
     */
    public function setInfoChannelPermissions(\Calcinai\Siri\GeneralMessageServicePermissionStructureType\InfoChannelPermissionsAType $infoChannelPermissions)
    {
        $this->infoChannelPermissions = $infoChannelPermissions;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

